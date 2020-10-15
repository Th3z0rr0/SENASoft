<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function acercade(){
        return view('modules.landing.acercade');
    }   
    public function servicios(){
        return view('modules.landing.servicios');
    }
    public function newproduct(){
        return view('modules.landing.newproduct');
    }

}
