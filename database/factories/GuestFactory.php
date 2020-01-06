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

$factory->define(App\Guest::class, function (Faker $faker) {

    $date = $faker->dateTimeThisYear();

    return [
        'name' => $faker->name,
        'attributeId' => $faker->numberBetween(1,3),
        '1stAttendFlg' => $faker->boolean,
        '2ndAttendFlg' => $faker->boolean,
        'dinnerComment' => $faker->sentence,
        'anotherComment' => $faker->sentence,
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
