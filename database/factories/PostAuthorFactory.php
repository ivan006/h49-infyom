<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PostAuthor;
use Faker\Generator as Faker;

$factory->define(PostAuthor::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'author_id' => $faker->randomDigitNotNull,
        'post_id' => $faker->randomDigitNotNull
    ];
});
