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

use App\Http\Controllers\MessageController;

Route::post('/pesan', [MessageController::class, 'store']); // kirim pesan
Route::get('/pesan',  [MessageController::class, 'index']); // lihat pesan masuk

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
