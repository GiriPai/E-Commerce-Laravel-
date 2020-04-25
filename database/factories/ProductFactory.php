<?php

use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\Classification;


$factory->define(Product::class, function (Faker $faker) {
    return [
        	'category_id'	 =>function()
		        {
		        	return Category::all()->random();
		        },
	        'type_id'	 =>function()
		        {
		        	return Type::all()->random();
		        },
		    'classification_id'	 =>function()
		        {
		        	return Classification::all()->random();
		        },
        'product_name'		=>$faker->word,
        'is_active'	 		=>$faker->numberBetween(0,1),
        'discount'			=>$faker->numberBetween(0,30),
        'price'				=>$faker->numberBetween(200,650),
        'p_description'	 	=>$faker->paragraph
       
    ];
});
