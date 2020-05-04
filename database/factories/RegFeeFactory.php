<?php

use Faker\Generator as Faker;

$factory->define(App\RegFee::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->user_id,
        'filename' => $faker->filename,
    ];
});
