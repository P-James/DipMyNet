<?php

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
        factory(Fishery::class, 12)->create();
        factory(Water::class, 36)->create();
    }
}
