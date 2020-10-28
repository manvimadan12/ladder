<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Role;
use App\User;
use App\RoleUser;
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
$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'user_id' => function(){
         return factory(User::class)->create()->id;
        },
        'role_id' => function(){
         return factory(Role::class)->create()->id;
        }
    ];
});