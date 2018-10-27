<?php

use Faker\Generator as Faker;

$factory->define(App\QuestionOption::class, function (Faker $faker) {
    return [
        'option' => $faker->sentence(),
    ];
});
