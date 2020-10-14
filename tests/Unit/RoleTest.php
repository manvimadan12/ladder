<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Role;
use App\User;

class RoleTest extends TestCase
{
    /** @test */
    public function role_should_have_many_users()
    {
    $role = factory(Role::class)->create();
    $role->users()->saveMany(factory(User::class, 5)->create());
    	
    $this->assertEquals(5, $role->users()->count());
    }
}

