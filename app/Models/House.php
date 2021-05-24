<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    public function street()
    {
        return $this->belongsTo(Street::class, 'street_id');
    }

    public function carsByHouse()
    {
        return $this->belongsTo(House::class, 'house_id');
    }
}
