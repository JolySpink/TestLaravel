<?php

use App\Http\Controllers\Test\PhotoFormController;
use App\Http\Controllers\Test\PhotoRequestController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testform', [PhotoFormController::class , 'index'])->name('form');
Route::post('/upload', [PhotoRequestController::class , 'index'])->name('upload');
