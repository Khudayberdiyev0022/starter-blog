<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
  use SoftDeletes;

  protected $table = 'settings';
  protected $fillable = ['name', 'val', 'type'];

  /**
   * Добавляет пару ключ-значение в хранилище данных.
   */
  public static function add(mixed $key,mixed $val, string $type = 'string'): mixed
  {
    if (self::has($key)) {
      return self::set($key, $val, $type);
    }

    return self::query()->create(['name' => $key, 'val' => $val, 'type' => $type]) ? $val : false;
  }

  /**
   * Получает значение параметра на основе предоставленного ключа.
   */
  public static function get(string $key, mixed $default = null): mixed
  {
    if (self::has($key)) {
      $setting = self::getAllSettings()->where('name', $key)->first();

      return self::castValue($setting->val, $setting->type);
    }

    return self::getDefaultValue($key, $default);
  }

  /**
   * Обновляет или добавляет значение параметра в базу данных.
   */
  public static function set(string $key, mixed $val, string $type = 'string'): mixed
  {
    if ($setting = self::getAllSettings()->where('name', $key)->first()) {
      return $setting->update([
        'name' => $key,
        'val' => $val,
        'type' => $type,
      ]) ? $val : false;
    }

    return self::add($key, $val, $type);
  }

  /**
   * Удаляет элемент из коллекции, если он существует.
   */
  public static function remove(string $key): bool
  {
    if (self::has($key)) {
      return self::whereName($key)->delete();
    }

    return false;
  }

  /**
   * Проверяет, существует ли ключ в настройках.
   */
  public static function has($key): bool
  {
    return (bool) self::getAllSettings()->whereStrict('name', $key)->count();
  }

  /**
   * Извлекает правила проверки для определенных полей настроек.
   */
  public static function getValidationRules(): array
  {
    return self::getDefinedSettingFields()->pluck('rules', 'name')
      ->reject(function ($val) {
        return is_null($val);
      })->toArray();
  }

  /**
   * Получает тип данных данного поля.
   */
  public static function getDataType(mixed $field): string
  {
    $type = self::getDefinedSettingFields()
      ->pluck('data', 'name')
      ->get($field);

    return is_null($type) ? 'string' : $type;
  }

  /**
   * Получите значение по умолчанию для данного поля.
   */
  public static function getDefaultValueForField(string $field): mixed
  {
    return self::getDefinedSettingFields()
      ->pluck('value', 'name')
      ->get($field);
  }

  /**
   * Получите все настройки из кеша или извлеките их из базы данных.
   */
  public static function getAllSettings(): mixed
  {
    return Cache::rememberForever('settings.all', function () {
      return self::all();
    });
  }

  /**
   * Очищает кеш для указанного ключа.
   */
  public static function flushCache(): void
  {
    Cache::forget('settings.all');
  }

  /**
   * Boot the model.
   */
  protected static function boot(): void
  {
    parent::boot();

    static::updated(function () {
      self::flushCache();
    });

    static::created(function () {
      self::flushCache();
    });

    static::deleted(function () {
      self::flushCache();
    });
  }

  /**
   * Получите значение по умолчанию для данного ключа.
   */
  private static function getDefaultValue(mixed $key, mixed $default): mixed
  {
    return is_null($default) ? self::getDefaultValueForField($key) : $default;
  }

  /**
   * Извлекает определенные поля настроек.
   */
  private static function getDefinedSettingFields(): \Illuminate\Support\Collection
  {
    return collect(config('setting_fields'))->pluck('elements')->flatten(1);
  }

  /**
   * Приводит значение к указанному типу данных.
   */
  private static function castValue(mixed $val, string $castTo): mixed
  {
    if ($castTo == 'int' || $castTo == 'integer') {
      return intval($val);
    } elseif ($castTo == 'bool' || $castTo == 'boolean') {
      return boolval($val);
    } else {
      return $val;
    }
  }
}
