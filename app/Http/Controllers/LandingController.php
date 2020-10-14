<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function acercade(){
        return view('modules.landing.acercade');
    }
    public function servicios(){
        return view('modules.landing.servicios');
    }

}
