<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Create or update the super admin user
        $user = User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('SuperAdmin@123456'),
            ]
        );

        // Create super-admin role if not exists
        $role = Role::firstOrCreate(['name' => 'Super Admin']);

        // Ensure all permissions exist and are assigned to the role
        $allPermissions = Permission::all();
        $role->syncPermissions($allPermissions);

        // Assign the role to the user
        if (!$user->hasRole('Super Admin')) {
            $user->assignRole('Super Admin');
        }
    }
}
