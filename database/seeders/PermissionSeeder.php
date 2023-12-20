<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $permissions = [
        'categories-create',
        'categories-show',
        'categories-edit',
        'categories-destroy',
        'tags-create',
        'tags-show',
        'tags-edit',
        'tags-destroy',
        'posts-create',
        'posts-show',
        'posts-edit',
        'posts-destroy',
      ];

      foreach ($permissions as $permission) {
        Permission::create(['name' => $permission]);
      }
    }
}
