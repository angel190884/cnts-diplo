<?php

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => 'sangre y componentes seguros',
        'short_name' => $faker->name,
        'start' => $faker->dateTime($max = 'now', $timezone = 'America/Mexico_City'),
        'end' =>$faker->dateTime($max = 'now', $timezone = 'America/Mexico_City'),
        'description' => $faker->realText(200,2),
        'generation' => $faker->randomDigit,
    ];
});
