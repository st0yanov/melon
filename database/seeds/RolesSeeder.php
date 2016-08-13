<?php

use Illuminate\Database\Seeder;
use Melon\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'owner',
                'display_name' => 'roles.owner.display_name',
                'description' => 'roles.owner.description',
            ],
            [
                'name' => 'admin',
                'display_name' => 'roles.admin.display_name',
                'description' => 'roles.admin.description',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
