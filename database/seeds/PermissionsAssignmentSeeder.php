<?php

use Illuminate\Database\Seeder;
use Melon\Models\Permission;

class PermissionsAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Roles
        $owner = Melon\Models\Role::where('name', 'owner')->firstOrFail();
        $admin = Melon\Models\Role::where('name', 'admin')->firstOrFail();

        // Permissions
        $article_manage = Permission::where('name', 'article.manage')->firstOrFail();
        $article_show = Permission::where('name', 'article.show')->firstOrFail();
        $article_create = Permission::where('name', 'article.create')->firstOrFail();
        $article_edit = Permission::where('name', 'article.edit')->firstOrFail();
        $article_delete = Permission::where('name', 'article.delete')->firstOrFail();

        $assignments = [
            'admin' => [$article_manage],
        ];

        // Assign all possible permissions to the owner
        $full_permissions = [$article_manage];
        $owner->attachPermissions($full_permissions);

        // Assign custom permissions to the other roles
        foreach ($assignments as $role => $custom_permissions) {
            $$role->attachPermissions($custom_permissions);
        }
    }
}
