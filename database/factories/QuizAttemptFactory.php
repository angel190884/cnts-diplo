<?php

use Faker\Generator as Faker;

$factory->define(App\QuizAttempt::class, function (Faker $faker) {
    return [
        'alternative' => $faker->sentence(),
        'active' => true
    ];
});
