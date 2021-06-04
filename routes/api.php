<?php

use App\Http\Controllers\Api\DepartamentController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\ProvinceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/departaments', [DepartamentController::class, 'getDepartaments']);
Route::get('/departaments/{id}/provinces', [ProvinceController::class, 'getProvincexDep']);
Route::get('/provinces/{id}/districts', [DistrictController::class, 'getDistritoxProv']);
