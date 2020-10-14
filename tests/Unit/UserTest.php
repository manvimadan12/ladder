<?php

namespace Tests\Unit;

use App\User;
use App\Role;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function user_should_have_many_roles()
    {
    $user = factory(User::class)->create();
    $user->roles()->saveMany(factory(Role::class, 3)->create());
    	
    $this->assertEquals(3, $user->roles()->count());
    }
}


