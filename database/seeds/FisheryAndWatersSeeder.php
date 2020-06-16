<?php

use App\Address;
use App\Fishery;
use App\Water;
use Illuminate\Database\Seeder;

class FisheryAndWatersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Address::class, 20)->create();

        // Fishery::all()->each(function($fishery) {
        //     $fishery->address()->save(Address::where('fishery_id', $fishery->id)->first());
        // });

        factory(Water::class, 60)->create();
    }
}
