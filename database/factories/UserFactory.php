<?php

use Faker\Generator as Faker;

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
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'picture' => $faker->uuid,
        'membership_number' => $faker->randomNumber(5),
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetName,
        'city' => $faker->city,
        'state' => $faker->state,
        'membership_year' => $faker->year(),
        'birth_date' => $faker->date('Y-m-d'),
        'rg' => $faker->randomNumber(7),
        'cpf' => $faker->randomNumber(7),
        'bloody_type' => $faker->randomLetter,
        'health_plan' => $faker->randomElement(['Amil', 'GoldenCross', 'Porto Seguro']),
        'cbm_where' => $faker->randomElement(['CAP', 'GPM', 'CEU']),
    ];
});
