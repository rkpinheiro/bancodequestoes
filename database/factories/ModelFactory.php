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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Question::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 15, $variableNbWords = true),
        'content' => $faker->optional()->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

$factory->define(App\Answer::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    $title = $faker->unique()->word();
    return [
        'text' => title_case($title),
        'slug' => str_slug($title),
    ];
});