<?php

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt("daniel"),
        'remember_token' => "1234512345",
    ];
});

$factory->define(App\Link::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'linkName' => $faker->sentence($nbWords = 5), 
        'link' => $faker->url,
        'points' => $faker->randomNumber(3),
    ];
});