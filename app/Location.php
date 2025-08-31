<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','city_id','description',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function businessLocations()
    {
        return $this->hasMany(BusinessLocation::class , 'location_id_id');
    }
}
