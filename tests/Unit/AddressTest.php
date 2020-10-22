<?php

namespace Tests\Unit;

use App\Address;
use App\User;
use Tests\TestCase;

class AddressTest extends TestCase
{
    /** @test */
    public function address_should_morph_to_user()
    {
    	$user = factory(User::class)->create();
    	$address = factory(Address::class)->create([
          "addressable_id" => $user->id,
          "addressable_type" => "App\User",
        ]);
      $this->assertInstanceOf(User::class, $address->addressable);
    }
}
