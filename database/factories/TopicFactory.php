<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'name' => $faker->realText(rand(15,20),2)
    ];
});
