<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'avatar' => 'avatars/no_user.png',
        'password' => bcrypt('secret'), // secret
        'email_verified_at' => Carbon::today(),

        'date_inscription' => $faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC'),

        'curp' => $faker->unique()->bothify('????######??????##'), //PEJA840819HDFRRN09
        'rfc'  => $faker->unique()->bothify('????######'), //PEJA840819
        'homoclave' => $faker->bothify('?##'),

        'calle' => $faker->streetName,
        'colonia' => $faker->cityPrefix,
        'municipio' => $faker->citySuffix,
        'entidad' => $faker->city,
        'cp' => $faker->postcode,
        'telefono' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber,

        'titulo' => $faker->randomElement(['medico','doctor','instrumentista']),
        'cedula' => $faker->unique()->bothify('######'),
        'institucion' => $faker->randomElement(['unam','ipn','itam']),

        'trabajo_inst'=> $faker->company,
        'cargo' => $faker->jobTitle,

        'file_titulo' => 'titulos/test.pdf',
        'file_cedula' => 'cedulas/test.pdf',
        'file_carta' => 'cartas/test.pdf',

        'updated_at' => $faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC'),

        'remember_token' => str_random(60),
    ];
});
