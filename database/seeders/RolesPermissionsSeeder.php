<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $AppAdminRoleWeb = Role::create([
            'name' => 'app-admin',
            'guard_name' => 'web',
        ]);

        $AppAdminRoleAPI = Role::create([
            'name' => 'super-admin',
            'guard_name' => 'api',
        ]);

        $StoreAdminRole = Role::create([
            'name' => 'store-admin',
            'guard_name' => 'api',
        ]);

        $StoreUserRole = Role::create([
            'name' => 'store-user',
            'guard_name' => 'api',
        ]);

        // $AppAdminRoleWeb->givePermissionTo([$createPost, $editPost]);
    }
}
