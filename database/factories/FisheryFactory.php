<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Fishery;
use Faker\Generator as Faker;

$factory->define(Fishery::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'contact' => $faker->companyEmail,
        'opening_times' => ['week' => '6am - 6pm', 'weekend' => '6am - 9pm'],
        'prices' => ['day' => '10', 'night' => '5'],
        'bailiff' => ['name' => 'Barry Gibbons', 'number' => ' 01753-845167'],
        'facilities' => $faker->randomElements(['toiletsMf', 'toiletsM', 'rentEquip', 'shop', 'parking'], rand(2,4))
    ];
});
