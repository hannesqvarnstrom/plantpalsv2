<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuggestionController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return User::all();
});
Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('suggestions', SuggestionController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index']
)->name('dashboard');
