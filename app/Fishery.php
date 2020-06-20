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

    /**
     * Count the types of waters at the Fishery and return a pre-formatted string.
     * 
     * @param string $type The type of water to count eg 'Still Water' or 'River'
     * @return string eg River x3
     */
    public function countType(string $type = null)
    {
        $countedWaterTypes = $this->waters->pluck('type')->countBy(function($waterType) use ($type) {
            return $waterType === $type;
        });

        $countedWaterTypes = $countedWaterTypes->pull(1);

        return $countedWaterTypes ? $type .' x'.$countedWaterTypes : '';
    }

    public static function search($query)
    {
        return empty($query) ? static::where('name', 'like', $query)
            : static::where('name', 'like', '%' . $query . '%');
            
    }
}
