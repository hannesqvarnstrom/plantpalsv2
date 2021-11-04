<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenusController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\VarietyController;
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
    Route::post('suggestions/{suggestion}/approve', [SuggestionController::class, 'approve'])
        ->name('suggestions.approve');

    Route::resource('families', FamilyController::class);
    Route::resource('genera', GenusController::class);
    Route::resource('species', SpeciesController::class);
    Route::resource('varieties', VarietyController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index']
)->name('dashboard');
