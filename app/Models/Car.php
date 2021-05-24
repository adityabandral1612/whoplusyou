<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;  
    public function owner()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }
    
    public function house()
    {
        return $this->belongsTo(House::class, 'house_id');
    }
}
