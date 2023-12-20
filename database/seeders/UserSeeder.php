<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $super = \App\Models\User::factory()->create([
        'name' => 'Super Admin',
        'email' => 'super@admin.com',
        'password'  => bcrypt('secret')
      ]);
      $admin = \App\Models\User::factory()->create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password'  => bcrypt('secret')
      ]);
      $manager = \App\Models\User::factory()->create([
        'name' => 'Manager',
        'email' => 'manager@manager.com',
        'password'  => bcrypt('secret')
      ]);
      $user = \App\Models\User::factory()->create([
        'name' => 'User',
        'email' => 'user@user.com',
        'password'  => bcrypt('secret')
      ]);
    }
}
