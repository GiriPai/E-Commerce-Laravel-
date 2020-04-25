<?php

use Faker\Generator as Faker;
use App\Models\Category;

$factory->define(App\Models\Type::class, function (Faker $faker) {
    return [
        'category_id'	 =>function()
	        {
	        	return Category::all()->random();
	        },
        'type_name'		 =>$faker->word,
        'has_products'	 =>$faker->numberBetween(0,1),
        't_description'	 =>$faker->paragraph 
    ];
});
