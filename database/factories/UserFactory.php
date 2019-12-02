<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'start_date' => $faker->date,
        'salary' => $faker->randomNumber($nbDigits = 6, $strict = true),
        'country_id' => $faker->unique()->numberBetween(1,20),
    ];
});

$factory->afterCreating(App\User::class, function ($user, $faker) {

    $roles = App\Role::inRandomOrder()->limit(mt_rand(1, 2))->get(['id'])->pluck('id');
    $user->roles()->attach($roles);
});
