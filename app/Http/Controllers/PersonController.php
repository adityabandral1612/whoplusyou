<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class PersonController extends ApiController
{
    public function addressByName($person_name)
    {
        if (Person::where('person_name', $person_name)->exists()) {
            $address = Person::where('person_name', $person_name)->first()->house;  
            $response['address_text'] = $address->address;
            $response['street_name'] = $address->street->street_name;
            return $this->successResponse($response, 200);
        } else {
            return $this->errorResponse('Record does not exist', 422);
        }
    }    
}
