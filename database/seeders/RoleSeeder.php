<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Role::create(['name' => 'super admin']);
    $admin   = Role::create(['name' => 'admin']);
    $manager = Role::create(['name' => 'manager']);
    $user    = Role::create(['name' => 'user']);

    $admin->givePermissionTo([
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
    ]);

    $manager->givePermissionTo([
      'tags-create',
      'tags-show',
      'tags-edit',
      'tags-destroy'
    ]);
    $user->givePermissionTo([
      'posts-show',
    ]);
  }
}
