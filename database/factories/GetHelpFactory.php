<?php

use Faker\Generator as Faker;

$factory->define(App\GetHelp::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->user_id,
        'gh_id' => $faker->gh_id,
        'gh_amount' => $faker->gh_amount,
        'gh_matched' => $faker->gh_matched,
        'gh_confirmed' => $faker->gh_confirmed,
    ];
});
