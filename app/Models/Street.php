<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;
    
    public function house()
    {
        return $this->hasMany(House::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function persons()
    {
        return $this->hasManyThrough(Person::class, House::class);
    }

    public function getCars(){        
        return $this->hasManyThrough(Car::class, House::class);
    }

}
