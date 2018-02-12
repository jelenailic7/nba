<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
            'title' => $faker->words($nb = 4, $asText = true),
            'content' => $faker->text,
            'user_id' => App\User::all()->random()->id,
                       
    ];
});


