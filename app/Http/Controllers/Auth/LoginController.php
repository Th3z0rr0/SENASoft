<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Auth_login()
    {
        return view('Auth.login');
    }
    public function Auth_register()
    {
        return view('Auth.register');
    }

}
