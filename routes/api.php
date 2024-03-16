<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SchoolController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('email', [EmailController::class, 'email']);


// STATE ROUTES
Route::get('state/list', [StateController::class, 'stateList']);
Route::post('state/create', [StateController::class, 'stateCreate']);
Route::post('state/update', [StateController::class, 'stateUpdate']);
Route::post('state/delete', [StateController::class, 'stateDelete']);


// CITY ROUTES
Route::get('city/list', [CityController::class, 'cityList']);
Route::post('city/create', [CityController::class, 'cityCreate']);
Route::post('city/update', [CityController::class, 'cityUpdate']);
Route::post('city/delete', [CityController::class, 'cityDelete']);


// STUDENT ROUTES
Route::get('school/list', [SchoolController::class, 'schoolList']);
Route::post('school/create', [SchoolController::class, 'schoolCreate']);
Route::post('school/update', [SchoolController::class, 'schoolUpdate']);
Route::post('school/Delete', [SchoolController::class, 'schoolDelete']);
