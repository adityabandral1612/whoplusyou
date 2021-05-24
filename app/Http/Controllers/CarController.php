<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CarController extends ApiController
{
    public function ownerByLicensePlate($license_plate)
    { 
        if (Car::where('license_plate', $license_plate)->exists()) {
            return $this->successResponse(Car::where('license_plate', $license_plate)->first()->owner, 200);
        } else {
            return $this->errorResponse('Record does not exist', 422);
        }
    }
}
