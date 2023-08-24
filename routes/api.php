<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

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

Route::get('/desa', [DesaController::class, 'index']);
Route::get('/desa/{id}', [DesaController::class, 'show']);
Route::post('/desa', [DesaController::class, 'store']);
Route::put('/desa/{id}', [DesaController::class, 'update']);
Route::delete('/desa/{id}', [DesaController::class, 'destroy']);
