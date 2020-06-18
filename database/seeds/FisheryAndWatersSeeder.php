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
        factory(Address::class, 100)->create();


        factory(Water::class, 350)->create();
    }
}
