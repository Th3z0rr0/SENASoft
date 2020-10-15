<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company\Company;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function Auth_login()
    {
        return view('Auth.login');
    }
    public function Auth_register_company()
    {
        return view('Auth.register_company');
    }
    public function Auth_store_company(Request $request)
    {
        $company = new Company();
        $company -> company_name = $request->company_name;
        $company -> nit = $request->nit;
        $company-> save();

        return redirect()->route('Auth.register', ['id' =>$company->id]);
    }
    public function Auth_register()
    {
        $company = Company::find(5);
        return view('Auth.register');
    }
    public function Auth_store_user(Request $request)
    {
        
        $user = new User();
        $user -> identificacion = $request->identificacion;
        $user -> name = $request->name;
        $user -> lastname = $request->lastname;
        $user -> email = $request->email;
        $user -> password = $request->password;
        $user -> rol_id = $request->rol;
        $user -> company_id = $request->company_id;
        $user -> save();
        
        return view('Auth.login');

    }
    public function Auth_logout(Request $request){
        $request->session()->forget('mensaje');
    }
    public function Auth_Auth(Request $request)
    {   $user=User::where('email','=',$request->input('email'))->first();
        if($user){
            
            if ($user->password==$request->input('password')) {
                if ($user->rol_id==1) {

                    SESSION(['USER_SESSION'=>$user]);
                    return redirect()->route('Index');

                }elseif($user->rol_id==2){

                    SESSION(['USER_SESSION'=>$user]);
                    return redirect()->route('Admin.index');

                }elseif($user->rol_id==3){

                    SESSION(['USER_SESSION'=>$user]);
                    return redirect()->route('Index');

                }elseif($user->rol_id==4){

                    SESSION(['USER_SESSION'=>$user]);
                    return redirect()->route('Index');

                }else{
                    return view('Auth.login');
                }
            }else{
                return view('Auth.login');
        }

        }else{
            return view('Auth.login');
    }

}
}