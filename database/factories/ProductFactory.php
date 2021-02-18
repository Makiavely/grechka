<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'protein' => $faker->numberBetween(1,100),
        'fat' => $faker->numberBetween(1,100),
        'carbohydrate' => $faker->numberBetween(1,100),
    ];
});
