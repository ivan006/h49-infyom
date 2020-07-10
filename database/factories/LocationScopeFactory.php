<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocationScope;
use Faker\Generator as Faker;

$factory->define(LocationScope::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'coords' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
