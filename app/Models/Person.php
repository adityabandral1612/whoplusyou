<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = 'persons';
    use HasFactory;
    public function house()
    {
        return $this->belongsTo(House::class, 'house_id');
    }
}
