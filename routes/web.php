<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\admin\AdminController;

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
Route::get('acercade',[LandingController::class,'acercade'])->name('landing.acercade');
Route::get('servicios',[LandingController::class,'servicios'])->name('landing.servicios');


Route::get('index',[AdminController::class,'index'])->name('Admin.index');
Route::get('view',[AdminController::class,'view'])->name('Admin.view');
Route::get('Create',[AdminController::class,'create'])->name('Admin.create');

