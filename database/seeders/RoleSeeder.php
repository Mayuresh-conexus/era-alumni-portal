<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Example permissions
        $permissions = [
            'view dashboard',
            'view posts',
            'create posts',
            'edit posts',
            'delete posts',
            'view users',
            'edit users',
        ];

        foreach ($permissions as $permissionName) {
            $permission = Permission::firstOrCreate(['name' => $permissionName]);
        }

        // Assign all permissions to admin
        $admin->givePermissionTo(Permission::all());

        // Assign limited permissions to user
        $user->givePermissionTo([
            'view dashboard',
            'view posts',
        ]);
    }
}
