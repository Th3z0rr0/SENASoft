<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\operator\OperatorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VendorController;


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


Route::get('Auth/login',[LoginController::class,'Auth_login'])->name('Auth.login');
Route::get('Auth/register',[LoginController::class,'Auth_register'])->name('Auth.register');

Route::get('Admin/index',[AdminController::class,'index'])->name('Admin.index');
Route::get('Admin/view_branch',[AdminController::class,'view_branch'])->name('Admin.view_branch');
Route::get('Admin/view_store',[AdminController::class,'view_store'])->name('Admin.view_store');
Route::get('Admin/Create',[AdminController::class,'create'])->name('Admin.create');
Route::get('Admin/view_products',[AdminController::class,'view_products'])->name('Admin.view_products');
Route::get('Admin/view_products_store',[AdminController::class,'view_products_store'])->name('Admin.view_products_store');


Route::get('generarventas',[VendorController::class,'generarventas'])->name('landing.generarventas');
Route::get('generarfactura',[VendorController::class,'generarfactura'])->name('landing.generarfactura');
Route::get('detallesfactura',[VendorController::class,'detallesfactura'])->name('landing.detallesfactura');
Route::get('productos',[VendorController::class,'productos'])->name('landing.productos');
Route::post('productos',[VendorController::class,'ingreso'])->name('recordar');



Route::get('Operator',[OperatorController::class,'index'])->name('Operator.index');
Route::get('NewProduct',[LandingController::class,'newproduct'])->name('landing.newproduct');
Route::get('EditProduct/{id}',[OperatorController::class,'editproduct'])->name('edit.product');

Route::post('NewProduct',[OperatorController::class,'store'])->name('create.product');

Route::put('updateProduct/{id}',[OperatorController::class,'update'])->name('update.product');
Route::delete('Operator/{id}',[OperatorController::class,'destroy'])->name('operator.delete');



Route::get('correo',[VendorController::class,'correo'])->name('landing.correo');
Route::get('envio',[VendorController::class,'envio'])->name('landing.envio');

//Route::post('correo',[VendorController::class,'contactos'])->name('landing.contacto');




