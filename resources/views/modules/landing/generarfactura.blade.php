@extends('vendor')
@section('content')


<div class="col-lg-12">
    <div class="card">
    <div class="card-header"> Registor Facturas </div>
    <div class="card-body">
    <table class="table table-responsive-sm table-striped">
    <thead>
    <tr>
    <th>Id </th>
    <th>Fecha </th>
    <th>Nombre cliente </th>
    <th>Detalles</th>
    </tr>
    </thead>
    

    @foreach ($ventas as $venta)
        
   <tr>
    <td>{{ $venta->id}}</td>
    <td> {{ $venta->product}} </td>
    
    <td> {{ $venta->created_at}}</td>
   <td> <a href="{{ route('landing.detallesfactura')}}">{{"detalles"}}</a></td>
</tr>
     @endforeach
    <tbody>
    <tr>
    
    </tbody>
    </table>
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    </div>
    </div>
    </div>
    


    @endsection
