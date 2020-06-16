<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function fishery()
    {
        return $this->belongsTo(\App\Fishery::class);
    }
}
