<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use App\Role;

class UserRoleTest extends TestCase
{
    /** @test */
    public function that_user_has_a_role()
    {

    	$user = new User;
    	$user = factory(User::class)->create([
    'name' => 'man',]);
    	$role = new Role;
    	$role->name='clerk';

    	$user->roles()->save($role);

        $this->assertEquals(1,$user->roles->count());
    }
}
