<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Fishery;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'line_one' => $faker->streetAddress,
        'town' => $faker->city,
        'county' => $faker->state,
        'post_code' => $faker->postcode,
        'fishery_id' => function(){
            return factory(Fishery::class)->create()->id;
        }
    ];
});