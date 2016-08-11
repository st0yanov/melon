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
        $create_post = Permission::where('name', 'create-post')->firstOrFail();
        $edit_user = Permission::where('name', 'edit-user')->firstOrFail();

        $assignments = [
            'admin' => [$create_post, $edit_user],
        ];

        // Assign all possible permissions to the owner
        $full_permissions = [$create_post, $edit_user];
        $owner->attachPermissions($full_permissions);

        // Assign custom permissions to the other roles
        foreach ($assignments as $role => $custom_permissions) {
            $$role->attachPermissions($custom_permissions);
        }
    }
}
