@extends('Operator.app')
@section('content')
    <h1>Estas en la pagina de Operario</h1>
    
<a class="btn btn-success text-white" href="{{route('landing.newproduct')}}"type="button">Crear Nuevo producto</a>
    <div class="row pt-3">
        <div class="col-lg-12">
        <div class="card">
        <div class="card-header"> Combined All Table</div>
        <div class="card-body">
        <table class="table table-responsive-sm table-bordered table-striped table-sm">
        <thead>
        <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Cantidad</th>
        
        <th>Acciones</th>
        </tr>
        </thead>
        @foreach ($products as $product)
            
        
        <tbody>
        <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>
        <form action="{{route('operator.delete',$product->id)}}" method="POST">
            @csrf
            @method('DELETE')

                <a href="{{route('edit.product',$product->id)}}" class="btn btn-warning btn-sm" >Editar</a>
             
                <button class="btn  btn-danger btn-sm " type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
        </tbody>
        @endforeach
        </table>
        <nav>
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </nav>
        </div>
        </div>
        </div>
    
@endsection
