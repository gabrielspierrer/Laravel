<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        'tipo' => $faker->word,
        'ingredientes' => $faker->text,
        'cantidad' => $faker->randomDigit,
        'precio' => $faker->randomFloat,
    ];
});
