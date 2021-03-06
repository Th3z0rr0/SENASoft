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

//Logeo y registro
Route::get('Auth/login',[LoginController::class,'Auth_login'])->name('Auth.login');
Route::post('Auth/logout',[LoginController::class,'Auth_logout'])->name('Auth.logout');
Route::post('Auth/',[LoginController::class,'Auth_Auth'])->name('Auth.Auth');
Route::get('Auth/register',[LoginController::class,'Auth_register'])->name('Auth.register');
Route::get('Auth/register_company',[LoginController::class,'Auth_register_company'])->name('Auth.register_company');
Route::post('Auth/store',[LoginController::class,'Auth_store_company'])->name('Auth.Auth_store_company');
Route::post('Auth/store_user',[LoginController::class,'Auth_store_user'])->name('Auth.Auth_store_user');

//Rol Admin
Route::get('Admin/index',[AdminController::class,'index'])->name('Admin.index');
Route::get('Admin/view_branch',[AdminController::class,'view_branch'])->name('Admin.view_branch');
Route::get('Admin/view_store',[AdminController::class,'view_store'])->name('Admin.view_store');
Route::get('Admin/create_branch',[AdminController::class,'create_branch'])->name('Admin.create_branch');
Route::get('Admin/create_store',[AdminController::class,'create_store'])->name('Admin.create_store');
Route::get('Admin/Create',[AdminController::class,'create'])->name('Admin.create');
Route::get('Admin/view_products',[AdminController::class,'view_products'])->name('Admin.view_products');
Route::get('Admin/view_products_store',[AdminController::class,'view_products_store'])->name('Admin.view_products_store');
Route::get('Admin/view_workers',[AdminController::class,'view_workers'])->name('Admin.view_workers');
Route::get('Admin/create_workers',[AdminController::class,'create_workers'])->name('Admin.create_workers');

//Rol Vendedor
Route::get('generarventas',[VendorController::class,'generarventas'])->name('landing.generarventas');
Route::get('generarfactura',[VendorController::class,'generarfactura'])->name('landing.generarfactura');
Route::get('detallesfactura',[VendorController::class,'detallesfactura'])->name('landing.detallesfactura');
Route::get('productos',[VendorController::class,'productos'])->name('landing.productos');
Route::post('productos',[VendorController::class,'ingreso'])->name('recordar');

//Rol Operador
Route::get('Operator',[OperatorController::class,'index'])->name('Operator.index');
Route::get('NewProduct',[LandingController::class,'newproduct'])->name('landing.newproduct');
Route::get('EditProduct/{id}',[OperatorController::class,'editproduct'])->name('edit.product');

Route::post('NewProduct',[OperatorController::class,'store'])->name('create.product');

Route::put('updateProduct/{id}',[OperatorController::class,'update'])->name('update.product');
Route::delete('Operator/{id}',[OperatorController::class,'destroy'])->name('operator.delete');

Route::get('correo',[VendorController::class,'correo'])->name('landing.correo');


Route::get('correo',[VendorController::class,'correo'])->name('landing.correo');
Route::get('envio',[VendorController::class,'envio'])->name('landing.envio');

//Route::post('correo',[VendorController::class,'contactos'])->name('landing.contacto');




