<?php

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => 'sangre y componentes seguros',
        'short_name' => $faker->name,
        'description' => $faker->realText(200,2),
        'generation' => $faker->randomDigit,
    ];
});
