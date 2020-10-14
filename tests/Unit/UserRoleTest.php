<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use App\Role;
use App\UserRole;

class UserRoleTest extends TestCase
{
    /** @test */
    public function user_role_should_belong_to_user_and_role()
    {
        
    $userRole = factory(UserRole::class)->create();

    $userRole->user()->associate(factory(User::class)->create());
    $userRole->role()->associate(factory(Role::class)->create());

    $this->assertEquals(1 ,$userRole->user()->count());
    $this->assertEquals(1 ,$userRole->role()->count());
    }
}
