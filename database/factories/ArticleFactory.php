<?php

use Faker\Generator as Faker;
use App\Article as Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
            'title' => $faker->sentence,
            'overview' => $faker->paragraph,
            'fulltext' => $faker->text,
    ];
});
