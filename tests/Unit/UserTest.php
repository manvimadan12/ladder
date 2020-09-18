<?php

namespace Tests\Unit;


use App\User;

use Tests\TestCase;




class UserTest extends TestCase
{
    /** @test */
    public function checking_instance_of_user()
    {
    	$user = new User;
    	$user = factory(User::class)->create([
    'name' => 'Avtar',]);

    	$user->save();
        
        
      $this->assertInstanceOf(User::class, $user);
         
      $this->assertEquals($user->name,"Avtar");
    }

    
}


