<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::updateOrCreate(
                [ 'email' => 'assiff79@gmail.com' ], // search criteria
                [ 'name' => 'Super Admin', 'password' => bcrypt('password') ] // values to update or create
        );

        $role = Role::firstOrCreate([
            'name' => 'super-admin',
            'guard_name' => 'api',
        ]);

        $user->assignRole($role);

        $this->command->info('Super Admin created Successfully!');
        
    }
}