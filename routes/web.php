<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UnitController;

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

//Home Page
Route::get('/', [UnitController::class, 'index'])->name('unit.index');


//Unit Crud Operation Section
Route::resource('/unit',UnitController::class);
