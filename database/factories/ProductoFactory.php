<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'cantidad' => $faker->randomDigit,
        'precio' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
