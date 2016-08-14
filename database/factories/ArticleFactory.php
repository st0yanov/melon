<?php

$factory->define(Melon\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'user_id' => function () {
            return factory(Melon\Models\User::class)->create()->id;
        },
    ];
});
