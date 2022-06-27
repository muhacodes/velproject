<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Approve;
use Faker\Generator as Faker;

$factory->define(Approve::class, function (Faker $faker) {
    return [
        'job_card_no' => $faker->randomDigit(1,100),
        'customer_name' => $faker->name,
        'description' => $faker->text(50),
        'quantity' => $faker->randomDigit(1,20),
        'price' => $faker->randomDigit(20000,500000),
        'actual_amount' => $faker->randomDigit(20000,300000),
        'price_difference' => $faker->randomDigit(450000,900000),
        'total_difference' => $faker->randomDigit(450000,900000),
    ];
});


// // 'order_id' => $faker->randomDigit(),
// // 'customer' => $faker->name,
// // 'address' => $faker->name,
// // 'amount' => $faker->randomDigit(),
// // 'Item' => $faker->randomDigit(),
// // 'agent' => $faker->randomDigit(),
// $table->integer('quantity');
//             $table->integer('price');
//             $table->integer('actual_amount');
//             $table->integer('price_difference');
//             $table->integer('total_difference');
//             $table->boolean('is_approved')->nullable();
//             $table->integer('user_id')->unsigned();