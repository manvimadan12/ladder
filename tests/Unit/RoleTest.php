<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Role;

class RoleTest extends TestCase
{
    /** @test */
    public function checking_instance_of_role()
    {
    	$role = new Role;
    	$role ->name='Admin';
        
        
      $this->assertInstanceOf(Role::class, $role);
         
      $this->assertEquals($role->name,"Admin");
    }
}

