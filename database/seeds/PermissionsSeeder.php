<?php

use Illuminate\Database\Seeder;
use Melon\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'create-post',
                'display_name' => 'Create Posts',
                'description' => 'Create new blog posts.',
            ],
            [
                'name' => 'edit-user',
                'display_name' => 'Edit Users',
                'description' => 'Edit existing users.',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
