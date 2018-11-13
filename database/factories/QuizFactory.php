<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(App\Quiz::class, function (Faker $faker) {
    return [
        'title' => $faker->numerify('Examen ###'),
        'end' => Carbon::now()->addDays($faker->randomDigit),
        'number_questions' => $faker->numberBetween(10,20),
        'min_score' => 6,
        'active' => true,
    ];
});
