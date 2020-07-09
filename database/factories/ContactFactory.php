<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'source_place_id' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'email' => $faker->word,
        'title' => $faker->word,
        'location' => $faker->word,
        'linkedin' => $faker->word,
        'company' => $faker->word,
        'company_website' => $faker->word,
        'company_industry' => $faker->word,
        'company_founded' => $faker->word,
        'company_size' => $faker->word,
        'company_linkedin' => $faker->word,
        'company_headquarters' => $faker->word
    ];
});
