<?php

use Faker\Generator as Faker;

$factory->define(App\Support::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->user_id,
        'title' => $faker->title,
        'description' => $faker->description,
    ];
});
