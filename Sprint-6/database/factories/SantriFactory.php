<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Santri;
use Faker\Generator as Faker;

$factory->define(Santri::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(12,19),
        'city' => $faker->city
    ];
});
