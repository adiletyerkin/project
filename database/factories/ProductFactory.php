<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'discription' => $faker->sentence(10),
        'price' => $faker->numberBetween(10000, 100000),

    ];
});
