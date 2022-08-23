<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\ProductCategoryModel;

use Faker\Generator as Faker;

$factory->define(ProductCategoryModel::class, function (Faker $faker) {

    $choose = [
        '飲料',
        '水果',
    ];
    $key = rand(0, 1);
    return [
        'product_name' => "$choose[$key]",
        'price' => $faker->numberBetween(10,100),
    ];
});

