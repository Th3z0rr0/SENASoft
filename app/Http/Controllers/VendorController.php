<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CorreoMailable;
use App\Models\Ventas;


use Illuminate\Support\Facades\Mail;

class VendorController extends Controller
{
    public function generarventas(){
        return view('modules.landing.generarventas');
    }
    public function generarfactura(){
        $ventas = Ventas::all();
        return view('modules.landing.generarfactura',compact('ventas'));
    }
    public function detallesfactura(){
      
      return view('modules.landing.detallesfactura');
    }
    public function productos(){
        return view('modules.landing.productos');
    }
    public function ingreso(Request $request){
        $ventas = Ventas::create($request->all());
        return redirect('generarfactura');
    }
    public function correo(){
        return view('modules.landing.correo');
    }
    public function envio(Request $request){

        $this->validate($request, [
            'email'     =>  'required|email',
            'asunto'  =>  'required',
            'descripcion' =>  'required'
           ]);
           
         $datos = array(
              'email'      =>  $request->input('email'),
              'descripcion'   =>   $request->input('descripcion')
          );
      
          $email = $request->input('email');

        Mail::to($email)->send(new CorreoMailable($datos));
        return "se envio exitosamentes";
    }
}
