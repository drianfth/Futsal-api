<?php

use App\Http\Controllers\LapanganController;
use App\Models\Lapangan;
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

Route::get('/', [LapanganController::class, 'index']);
Route::get('/lapangan/{lapangan:id}', [LapanganController::class, 'show']);
Route::post('/lapangan', [LapanganController::class, 'store']);
