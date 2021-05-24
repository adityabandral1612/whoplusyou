<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ownerByLicensePlate/{license}', [CarController::class, 'ownerByLicensePlate']);
Route::get('addressByPersonName/{person_name}', [PersonController::class, 'addressByPersonName']);
Route::get('carsByStreetName/{street_name}', [StreetController::class, 'carsByStreetName']);
Route::get('personByCityName/{city_name}', [CityController::class, 'personByCityName']);

