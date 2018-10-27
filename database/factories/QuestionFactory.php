<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence(),
        'type' => $faker->randomDigitNotNull,
        'visible' => true,
    ];
});
