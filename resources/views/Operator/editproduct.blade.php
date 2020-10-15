@extends('Operator.app')
@section('content')
    
<form action="{{route('update.product',$products->id)}}" method="POST">
    @csrf
    @method('PUT')

<div class="col-bg-6">
    <div class="card">
    <div class="card-header"><strong>Editar producto</strong></div>
    <div class="card-body">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" id="name" name="name" type="text" placeholder="Nombre de la herramienta" value="{{$products->name}}">
        </div> 
        <div class="form-group">
        <label for="description">Descripción</label>
        <input class="form-control width-100 heigth-auto" id="description" value="{{$products->description}}" name="description" type="text" placeholder="Descripción del producto">
        </div>
        <div class="form-group">
        <label for="price">Precio</label>
        <input class="form-control" id="price"  name="price"  type="text" value="{{$products->price}}" placeholder="Ejemplo: $10000">
        </div>
        <div class="row">
        <div class="form-group col-sm-8">
        <label for="quantity">Cantidad</label>
        <input class="form-control " style="width:152%" id="quantity" value="{{$products->quantity}}" name="quantity" type="text" placeholder="Ejemplo: 1000">
        </div>
        
        <button class="btn btn-success" type="submit" style="margin-left:91%"href="#" type="button">Guardar</button>
    
        </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
</form>

@endsection    