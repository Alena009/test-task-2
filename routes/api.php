<?php

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Auth\PassportAuthController;
use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\TripController;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/login', [PassportAuthController::class, 'login']);


//////////////////////////////////////////////////////////////////////////
/// Mock Endpoints To Be Replaced With RESTful API.
/// - API implementation needs to return data in the format seen below.
/// - Post data will be in the format seen below.
/// - /resource/assets/traxAPI.js will have to be updated to align with
///   the API implementation
//////////////////////////////////////////////////////////////////////////

// Mock endpoint to get all cars for the logged in user

Route::get('/mock-get-cars', [CarController::class, 'index'])->middleware('auth:api');


// Mock endpoint to add a new car.

Route::post('mock-add-car', [CarController::class, 'store'])->middleware('auth:api');


// Mock endpoint to get a car with the given id

Route::get('/mock-get-car/{id}', [CarController::class, 'show'])->middleware('auth:api');


// Mock endpoint to delete a car with a given id

Route::delete('mock-delete-car/{id}', [CarController::class, 'destroy'])->middleware('auth:api');


// Mock endpoint to get the trips for the logged in user

Route::get('/mock-get-trips', [TripController::class, 'index'])->middleware('auth:api');


// Mock endpoint to add a new trip.

Route::post('mock-add-trip', [TripController::class, 'store'])->middleware('auth:api');
