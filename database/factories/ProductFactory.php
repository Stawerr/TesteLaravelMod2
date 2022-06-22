<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 4),
        'project_id' => rand(1, 20),
        'name' => $faker->firstName,
        'detail' => $faker->lastName,
    ];
});
