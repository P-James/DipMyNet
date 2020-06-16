<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fishery extends Model
{
    protected $casts = [
        'opening_times' => 'array',
        'prices' => 'array',
        'bailiff' => 'array',
        'facilities' => 'array'
    ];

    public function address()
    {
        return $this->hasOne(\App\Address::class, 'fishery_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function waters()
    {
        return $this->hasMany(Water::class);
    }

    public function path()
    {
        return '/fisheries/' . $this->id;
    }

    public static function search($query)
    {
        return empty($query) ? static::where('name', 'like', $query)
            : static::where('name', 'like', '%' . $query . '%');
            
    }
}
