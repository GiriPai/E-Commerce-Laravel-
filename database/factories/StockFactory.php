<?php

use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(App\Models\Stock::class, function (Faker $faker) {
    return [
        'product_id'   =>function()
		        {
		        	return Product::all()->random();
		        },
        'initial_stock' => $faker->numberBetween(30,60),
        'available_stock'=> $faker->numberBetween(0,60),

        
        ];
});
