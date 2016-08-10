<?php

use Illuminate\Database\Seeder;
use Melon\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles = [
    		[
    			'name' => 'owner',
    			'display_name' => 'Owner',
    			'description' => 'Has all permissions on the website.'
    		],
    		[
    			'name' => 'admin',
    			'display_name' => 'Admin',
    			'description' => 'Has most of the permissions on the website except some business related ones.'
    		]
    	];

    	foreach ($roles as $role) {
    		Role::create($role);
    	}
    }
}
