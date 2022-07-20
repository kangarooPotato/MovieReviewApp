<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    $movieIds = App\Movie::pluck('id')->all();
    $authorIds = App\User::pluck('id')->all();
    return [
        'title' => $faker->title,
        'body' => $faker->paragraph,
        'author_id' => $faker->randomElement($authorIds),
        //'author_id' => $faker->randomNumber(),
        'movie_id' => $faker->randomElement($movieIds)
    ];
});
