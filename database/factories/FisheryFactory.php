<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fishery;
use App\Water;
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

$factory->afterCreating(Fishery::class, function ($fishery, Faker $faker) {
    for ($i=0; $i < $faker->numberBetween(2, 6); $i++) { 
        $fishery->waters()->save(factory(Water::class)->create([
            'fishery_id' => $fishery->id
        ]));
    } 
});
