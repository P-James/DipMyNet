<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Water;
use Faker\Generator as Faker;

$factory->define(Water::class, function (Faker $faker) {
    return [
        'fishery_id' => $faker->numberBetween(1,100),
        'type' => $faker->randomElement(['Still Water', 'River']),
        'rules' => ['Equipment' => ['2ft nets', '5ft nets'], 'Baits' => ['bait1', 'bait2'], 'Catch and Release'],
        'fish' => $faker->randomElement(['Carp', 'Trout', 'Pike', 'Catfish'])
    ];
});
