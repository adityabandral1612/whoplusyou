<?php

namespace App\Http\Controllers;
use App\Models\Street;
use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class StreetController extends ApiController
{
    public function carsByStreetName($street_name)
    {
        if (Street::where('street_name', $street_name)->exists()) {
            return $this->successResponse(Street::where('street_name', $street_name)->first()->getCars, 200);  
        } else {
            return $this->errorResponse('Record does not exist', 422);
        }
    }
    
}
