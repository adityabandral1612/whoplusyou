<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function streets()
    {
        return $this->hasMany(Street::class);
    }

    public function getHouses(){
        
        return $this->hasManyThrough(House::class, Street::class);
    }

    public function getPersons(){
        $persons = false;
 
        foreach ($this->streets as $street) {
            if($street->count() > 0 && !$persons){
                $persons = $street->persons;
            } else if($street->count() > 0 && $persons){
                $persons = $persons->merge($street->persons);
            }
        }
        
        return $persons;
    }
}
