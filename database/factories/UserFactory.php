<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\UserEntity;


use Faker\Generator as Faker;

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

$factory->define(UserEntity::class, function (Faker $faker) {
    return [
        'name' => 'test1',
        'email' => 'test@example.com',
        'phone' => '0090000123',
        'password' => 'thisisatest', // password 不進行hash 

    ];
});
