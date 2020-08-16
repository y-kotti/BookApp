<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Model\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 10, $indexSize = 1),
        'cost' => $faker->numberBetween($min = 100, $max = 5000),
        'memo' => $faker->realText($maxNbChars = 300, $indexSize = 1),
    ];
});
