<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Space;
use Faker\Generator as Faker;

$factory->define(Space::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'user_id' => factory(App\User::class),
    ];
});
