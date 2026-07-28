<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedUsers = [
            [
                'id' => 99,
                'name' => 'Super Admin',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'supervisor@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['super-user', 'admin'],
                'team_role' => 'admin',
                'permissions' => [],
            ],

            [
                'id' => 100,
                'name' => 'Admin I Strator',
                'first_name' => 'Admin',
                'last_name' => 'I Strator',
                'email' => 'admin@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['admin'],
                'team_role' => 'admin',
                'permissions' => [],
            ],

            [
                'id' => 200,
                'name' => 'Staff User',
                'first_name' => 'Staff',
                'last_name' => 'User',
                'email' => 'staff@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['staff'],
                'team_role' => 'admin',
                'permissions' => [],
            ],

            [
                'id' => 300,
                'name' => 'Client User',
                'first_name' => 'Client',
                'last_name' => 'User',
                'email' => 'client@example.com',
                'password' => 'Password1',
                'email_verified_at' => now(),
                'roles' => ['client'],
                'team_role' => 'member',
                'permissions' => [],
            ],

            [
                'id' => 301,
                'name' => 'Client User II',
                'first_name' => 'Client',
                'last_name' => 'User II',
                'email' => 'client2@example.com',
                'password' => 'Password1',
                'email_verified_at' => null,
                'roles' => ['client'],
                'team_role' => 'member',
                'permissions' => [],
            ],

            [
                'id' => 302,
                'name' => 'Client User III',
                'first_name' => 'Client',
                'last_name' => 'User III',
                'email' => 'client3@example.com',
                'password' => 'Password1',
                'email_verified_at' => null,
                'roles' => ['client'],
                'team_role' => 'member',
                'permissions' => [],
            ],
        ];

        foreach ($seedUsers as $newUser) {
            // Assign user as team member by default
            $newUser['role'] = $roles['team_role'] ?? 'member';
            unset($newUser['team_role']);

            // grab the roles & additional permissions from the seed users
            $roles = $newUser['roles'];
            unset($newUser['roles']);

            $permissions = $newUser['permissions'];
            unset($newUser['permissions']);

            $user = User::updateOrCreate(
                ['id' => $newUser['id']],
                $newUser
            );

            // Uncomment this line when using Spatie Permissions
            // $user->assignRole($roles);
            // $user->assignPermissions($permissions);

        }

        // Uncomment the line below to create (10) randomly named users using the User Factory.
        // User::factory(10)->create();

    }
}
