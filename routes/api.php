<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('polygon', [ App\Http\Controllers\PolygonController::class, 'create']);
Route::get('polygons', [ App\Http\Controllers\PolygonController::class, 'index']);
Route::delete('polygon/{id}', [ App\Http\Controllers\PolygonController::class, 'destroy']);
