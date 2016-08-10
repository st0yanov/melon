<?php

use Illuminate\Database\Seeder;
use Melon\Models\User;
use Melon\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create a user for each role
    	$owner_user = factory(Melon\Models\User::class)->create(['email' => 'owner@example.com', 'password' => bcrypt('123456')]);
    	$admin_user = factory(Melon\Models\User::class)->create(['email' => 'admin@example.com', 'password' => bcrypt('123456')]);

    	// Find the needed roles
    	$owner_role = Role::where('name', 'owner')->firstOrFail();
    	$admin_role = Role::where('name', 'admin')->firstOrFail();

    	// Assign roles to users
    	$owner_user->attachRole($owner_role);
    	$admin_user->attachRole($admin_role);
    }
}
