<?php

use Faker\Generator as Faker;

$factory->define(App\Forum::class, function (Faker $faker) {
    return [
        'forum' => $faker->sentence,
        'start' => $faker->dateTime($max = 'now', $timezone = 'America/Mexico_City'),
        'end' =>$faker->dateTime($max = 'now', $timezone = 'America/Mexico_City'),
        'observations' => $faker->realText(200,2)
    ];
});
