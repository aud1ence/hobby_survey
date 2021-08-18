<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\SurveyController;
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

Route::prefix('survey')->group(function () {
    Route::get('food', [FoodController::class, 'index'])->name('food.index');
    Route::get('food/{id}', [FoodController::class, 'store'])->name('food.store');
    Route::get('pet', [PetController::class, 'index'])->name('pet.index');
    Route::get('pet/{id}', [PetController::class, 'store'])->name('pet.store');
    Route::get('result', [SurveyController::class, 'index'])->name('survey.index');
});
