<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $casts = [
        'rules' => 'array',
        'fish' => 'array'
    ];
    
    public function fishery()
    {
        return $this->belongsTo(Fishery::class);
    }
}
