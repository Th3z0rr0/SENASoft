<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Operator\Operator;

class OperatorController extends Controller
{
    public function index(){

        $products = Operator::all();

        return view('Operator.index',compact('products'));
    }

    public function store(Request $request)
    {
        $products = Operator::create($request->all());
        
        return redirect(route('Operator.index'));
    }

    public function editproduct($id){
        
        $products = Operator::find($id);

        return view('Operator.editproduct',compact('products'));

        
    }

    public function update(Request $request, $id)
    {
        $products = Operator::find($id)->update($request->all());
        
        return redirect(route('Operator.index',compact('products')));
    }

    
    public function destroy($id)
    {

        $products = Operator::find($id)->delete();

        return redirect()->route('Operator.index',compact('products'));
    }
}
