<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'content' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'post_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull
    ];
});
