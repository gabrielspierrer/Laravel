<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Moto;
use Faker\Generator as Faker;

$factory->define(Moto::class, function (Faker $faker) {
    return [
        'marca' => $faker->word,
        'modelo' => $faker->randomDigit,
        'color' => $faker->colorName,
    ];
});
