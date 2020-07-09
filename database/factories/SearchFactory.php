<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Search;
use Faker\Generator as Faker;

$factory->define(Search::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'status_flag' => $faker->word,
        'status_note' => $faker->word
    ];
});
