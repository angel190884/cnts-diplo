<?php

use Faker\Generator as Faker;

$factory->define(App\Quiz::class, function (Faker $faker) {
    return [
        'title' => $faker->numerify('Examen ###'),
        'number_questions' => $faker->randomNumber($nbDigits = 2),
        'min_score' => 6,
        'active' => true,
    ];
});
