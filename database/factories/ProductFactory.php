<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'picture'=> $faker->image,
        'short_description'=> $faker->realText($maxNbChars = 50, $indexSize = 2),
        'description'=> $faker->realText($maxNbChars = 50, $indexSize = 2),
        'totoal_sels'=> $faker->numberBetween($min = 1, $max = 100),
        'product_type'=> $faker->word ,
        'stock'=> $faker->numberBetween($min = 1, $max = 100),
        'cost'=> $faker->numberBetween($min = 10, $max = 1000),
        'mrp'=> $faker->numberBetween($min = 10, $max = 1000),
        'special_price'=> $faker->numberBetween($min = 10, $max = 1000),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ];
});
