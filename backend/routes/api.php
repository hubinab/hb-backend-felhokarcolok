<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\SkyscraperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::apiResource('/cities',CityController::class)
    ->whereNumber('city')
;
Route::apiResource('/skyscrapers',SkyscraperController::class)
    ->whereNumber('skyscraper')
;