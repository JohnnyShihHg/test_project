<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\ProductCategoryModel;

use Faker\Generator as Faker;

$factory->define(ProductCategoryModel::class, function (Faker $faker) {

    $choose = [
        'apple',
        'banana',
        'orange',
    ];
    $key = rand(0, 2);
    return [
        'product_name' => "$choose[$key]",
        'price' => $faker->numberBetween(10,100),
    ];
});

