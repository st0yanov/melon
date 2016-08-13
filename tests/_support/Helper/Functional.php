<?php

namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Melon\Models\Role;

class Functional extends \Codeception\Module
{
    public function amLoggedInWithOwner()
    {
        $user = factory(\Melon\Models\User::class)->create();
        $owner_role = Role::where('name', 'owner')->firstOrFail();
        $user->attachRole($owner_role);
        $this->getModule('Laravel5')->amLoggedAs($user);
    }

    public function amLoggedInWithAdmin()
    {
        $user = factory(Melon\Models\User::class)->create();
        $admin_role = Role::where('name', 'admin')->firstOrFail();
        $user->attachRole($admin_role);
        $this->getModule('Laravel5')->amLoggedAs($user);
    }
}
