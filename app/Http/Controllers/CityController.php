<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CityController extends ApiController
{
    public function index()
    {
        return City::all();
    }

    public function personByCityName($city_name){
        if (City::where('city_name', $city_name)->exists()) {
            return $this->successResponse(City::where('city_name', $city_name)->first()->getPersons(), 200);
        } else {
            return $this->errorResponse('Record does not exist', 422);
        }
    }
    
}
