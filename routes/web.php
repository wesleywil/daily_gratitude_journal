<?php

use App\Http\Controllers\GratitudeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipMessageController;
use App\Http\Controllers\UserController;
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

Route::get('/tip-messages', [TipMessageController::class, 'index']);

// Gratitude Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/gratitude', [GratitudeController::class, 'index']);
    Route::get('/gratitude/{id}', [GratitudeController::class, 'show']);
    Route::post('/gratitude', [GratitudeController::class, 'store']);
    Route::post('/gratitude/{id}', [GratitudeController::class, 'update']);
    Route::match(['get', 'post'], 'gratitude/{id}/delete', [GratitudeController::class, 'delete']);
});



// User Routes
Route::middleware(['guest'])->group(function () {
    Route::match(['get', 'post'], 'register', [UserController::class, 'register']);
    Route::match(['get', 'post'], 'login', [UserController::class, 'login'])->name('login');
});