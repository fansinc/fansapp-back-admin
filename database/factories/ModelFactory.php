<?php

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'uuid' => $faker->uuid,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('12345678'),
        'remember_token' => Str::random(10),
        'mobile' => $faker->numerify('##########'),
    ];
});

$factory->define(App\Entities\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'uuid' => $faker->uuid,
    ];
});

$factory->define(App\Entities\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'uuid' => $faker->uuid,
    ];
});
