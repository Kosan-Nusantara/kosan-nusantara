<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'create-permission']);
        Permission::create(['name' => 'read-role']);
        Permission::create(['name' => 'read-permission']);

        Role::create(['name'=> 'admin']);
        Role::create(['name'=> 'user']);

        $roleAdmin = Role::findByName('admin');
        $roleUser = Role::findByName('user');

        $roleAdmin->givePermissionTo('create-role');
        $roleAdmin->givePermissionTo('create-permission');
        $roleAdmin->givePermissionTo('read-role');
        $roleAdmin->givePermissionTo('read-permission');

        $roleUser->givePermissionTo('read-role');
        $roleUser->givePermissionTo('read-permission');
    }
}
