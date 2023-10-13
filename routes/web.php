<?php

use App\Http\Controllers\GratitudeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipMessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/tip-messages', [TipMessageController::class, 'index']);
Route::get('/gratitude', [GratitudeController::class, 'index']);
Route::post('/gratitude', [GratitudeController::class, 'store']);