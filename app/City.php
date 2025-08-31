<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
