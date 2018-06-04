<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->realText(300,2)
    ];
});