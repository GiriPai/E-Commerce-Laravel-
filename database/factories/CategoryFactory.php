<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word, 
        'has_types' 	=> $faker->numberBetween(0,1),	
        'c_description' => $faker->paragraph,
        'is_active'		=> $faker->numberBetween(0,1)
        
        ];
});
