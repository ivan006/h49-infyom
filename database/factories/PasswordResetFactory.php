<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PasswordReset;
use Faker\Generator as Faker;

$factory->define(PasswordReset::class, function (Faker $faker) {

    return [
        'email' => $faker->word,
        'token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
