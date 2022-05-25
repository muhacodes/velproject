<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    return [
        'order_id' => $faker->randomDigit(),
        'customer' => $faker->name,
        'address' => $faker->name,
        'amount' => $faker->randomDigit(),
        'Item' => $faker->randomDigit(),
        'agent' => $faker->randomDigit(),
        'status' => 'pending',
    ];
});
