<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\ProductEntity;
use Faker\Generator as Faker;

$factory->define(ProductEntity::class, function (Faker $faker) {
    $choose = [
        '紅茶',
        '蘋果',
    ];
    $key = rand(0, 1);
    return [
        'name'=>"$choose[$key]",
        'size' => 'big',
        'color' => $faker->colorName,
        'amount' => 3,
    ];


});
