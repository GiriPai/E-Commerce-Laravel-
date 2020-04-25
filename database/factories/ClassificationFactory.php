<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Classification::class, function (Faker $faker) {
    return [
        'class_name'		=> $faker->word,
        'class_short_name'	=> $faker->word,
        'class_is_active'	=> $faker->numberBetween(0,1) 
    ];
});
