<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function generarventas(){
        return view('modules.landing.generarventas');
    }
    public function generarfactura(){
        return view('modules.landing.generarfactura');
    }
    public function detallesfactura(){
        return view('modules.landing.detallesfactura');
    }
    
}
