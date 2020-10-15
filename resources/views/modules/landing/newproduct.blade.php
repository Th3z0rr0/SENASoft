@extends('Operator.app')
@section('content')
    
     
    <div class="col-bg-6">
        <div class="card">
        <div class="card-header"><strong>Registro de productos</strong></div>
        <div class="card-body">
        <div class="form-group">
        <label for="company">Nombre</label>
        <input class="form-control" id="company" type="text" placeholder="Nombre de la herramienta">
        </div>
        <div class="form-group">
        <label for="vat">Descripción</label>
        <textarea class="form-control width-100 heigth-auto" id="vat" type="text" placeholder="Descripción del producto"></textarea>
        </div>
        <div class="form-group">
        <label for="street">Precio</label>
        <input class="form-control" id="street" type="text" placeholder="Ejemplo: $10000">
        </div>
        <div class="row">
        <div class="form-group col-sm-8">
        <label for="city">Cantidad</label>
        <input class="form-control " style="width:152%" id="city" type="text" placeholder="Ejemplo: 1000">
        </div>
        

    <a class="btn btn-success" href="{{route('Operator.index')}}" style="margin-left:91%"href="#" type="button">Guardar</a>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        
@endsection