<?php

use Faker\Generator as Faker;

$factory->define(App\ProvideHelp::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->user_id,
        'ph_id' => $faker->ph_id,
        'ph_amount' => $faker->ph_amount,
        'ph_matched' => $faker->ph_matched,
        'ph_confirmed' => $faker->ph_confirmed,
        
    ];
});


