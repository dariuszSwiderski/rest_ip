<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/Świderski/54776/people', [PeopleController::class, 'index']);
Route::get('/Świderski/54776/show/{id}', [PeopleController::class, 'show']);
Route::put('/Świderski/54776/update/{id}', [PeopleController::class, 'update']);
Route::get('/Świderski/54776/destroy/{id}', [PeopleController::class, 'destroy']);
Route::put('/Świderski/54776/store', [PeopleController::class, 'store']);