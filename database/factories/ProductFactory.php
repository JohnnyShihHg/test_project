<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Entities\ProductEntity;
use App\Model\ProductModel;
use Faker\Generator as Faker;

$factory->define(ProductModel::class, function (Faker $faker) {
    return [
        'size' => 'big',
        'color' => $faker->colorName,
        'amount' => 3,
    ];


});
