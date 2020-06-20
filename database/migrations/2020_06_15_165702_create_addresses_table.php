<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('line_one');
            $table->string('line_two')->nullable();
            $table->string('town');
            $table->string('county');
            $table->string('post_code');

            $table->unsignedBigInteger('fishery_id')->nullable();
            // $table->foreign('fishery_id')->references('id')->on('fisheries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
