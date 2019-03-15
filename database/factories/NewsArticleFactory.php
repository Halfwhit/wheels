<?php

use Faker\Generator as Faker;
use App\NewsArticle as NewsArticle;

$factory->define(NewsArticle::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'overview' => $faker->paragraph,
    ];
});
