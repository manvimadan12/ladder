<?php

namespace Tests\Unit;

use App\User;
use App\Role;
use App\Address;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    /*public function user_should_have_many_roles()
    {
    $user = factory(User::class)->create();
    $user->roles()->saveMany(factory(Role::class, 3)->create());
    	
    $this->assertEquals(3, $user->roles()->count());
    }*/

    /** @test */
    public function user_should_morph_one_address()
    {
    $user = factory(User::class)->create();
    $address=factory(Address::class)->create(["addressable_id" => $user->id,
          "addressable_type" => "App\User",]);
    $user->address();
    
    $this->assertEquals(1, $user->address()->count());
    }
}


