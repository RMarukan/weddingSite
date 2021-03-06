<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Models Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Guest::class, function (Faker $faker) {

    $date = $faker->dateTimeThisYear();

    return [
        'lstNameK' => $faker->lastName,
        'fstNameK' => $faker->firstName,
        'lstNameF' => $faker->lastKanaName,
        'fstNameF' => $faker->firstKanaName,
        'attributeId' => $faker->numberBetween(1,3),
        '1stAttendFlg' => $faker->boolean,
        '2ndAttendFlg' => $faker->boolean,
        'dinnerComment' => $faker->sentence,
        'anotherComment' => $faker->sentence,
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
