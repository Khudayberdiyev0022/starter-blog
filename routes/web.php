<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\IndexController::class);

Route::prefix('admin')->middleware(['auth', 'verified'])->name('admin.')->group(function () {
  Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('index');
//  Route::resource('profile', ProfileController::class)->only('edit', 'update', 'destroy');
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
  Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
  Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
  Route::get('settings', \App\Http\Controllers\Admin\SettingController::class)->name('settings.edit');
  Route::get('/comments', fn () => 'comments')->name('comments');
  Route::get('/notifications', fn () => 'notifications')->name('notifications');
  Route::get('/backups', fn () => 'backups')->name('backups');
  Route::get('/roles', fn () => 'roles')->name('roles');
  Route::get('/users', fn () => 'users')->name('users');
//  Route::get('/users', fn () => 'users')->name('users');
});

Route::get('slug', [\App\Http\Controllers\Admin\IndexController::class, 'slug'])->name('slug');

require __DIR__.'/auth.php';
