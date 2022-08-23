<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\PaymentEntity;
use Faker\Generator as Faker;

$factory->define(PaymentEntity::class, function (Faker $faker) {
    $choose = [
        '完成',
        '未完成',
    ];
    $key = rand(0, 1);
    return [
        'paymentstatus'=>"$choose[$key]"
    ];
});
