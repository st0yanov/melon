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
                'name' => 'article.manage',
                'display_name' => 'permissions.article.manage.display_name',
                'description' => 'permissions.article.manage.description',
            ],
            [
                'name' => 'article.show',
                'display_name' => 'permissions.article.show.display_name',
                'description' => 'permissions.article.show.description',
            ],
            [
                'name' => 'article.create',
                'display_name' => 'permissions.article.create.display_name',
                'description' => 'permissions.article.create.description',
            ],
            [
                'name' => 'article.edit',
                'display_name' => 'permissions.article.edit.display_name',
                'description' => 'permissions.article.edit.description',
            ],
            [
                'name' => 'article.delete',
                'display_name' => 'permissions.article.delete.display_name',
                'description' => 'permissions.article.delete.description',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
