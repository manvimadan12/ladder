<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Address;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address_1' => $faker->buildingNumber . ' ' . $faker->streetName,
        'address_2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->numberBetween( 1000, 6000 ),
      ];
});
