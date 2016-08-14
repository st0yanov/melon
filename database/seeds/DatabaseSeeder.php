<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(PermissionsAssignmentSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ArticlesSeeder::class);
    }
}
