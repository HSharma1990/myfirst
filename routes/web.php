<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormoController;
use App\Http\Controllers\UserController;

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
    return view('dashboard');
});

Route::post('create', [FormoController::class, 'create'])->name('create');
Route::get('showdetails', [FormoController::class, 'show'])->name('showdetails');
//Route::get('edit/{id}', 'FormoController@edit');

Route::get('edit/{id}', [FormoController::class, 'edit'])->name('edit');
