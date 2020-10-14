@extends('vendor')
@section('content')


<div class="col-lg-12">
    <div class="card">
    <div class="card-header"> Productos </div>
    <div class="card-body">
    <table class="table table-responsive-sm table-striped">
    <thead>
    <tr>
    <th>Id </th>
    <th>Producto </th>
    <th>Cantidad </th>
    <th>Precion Unidad</th>
    <th>Estado </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>clorox</td>
    <td>20</td>
    <td>2000</td>
    <td><button class="btn btn-success">Activo</button></td>
    </tr>
    <tr>
        <td>2</td>
        <td>jabones</td>
        <td>05</td>
        <td>500</td>
        <td><button class="btn btn-danger">Inactivo</button></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Shampoo</td>
        <td>03</td>
        <td>600</td>
        <td><button class="btn btn-danger">Inactivo</button></td>
    </tr>
    </tbody>
    </table>
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
    <li><a href="" class="ml-5 btn btn-primary" type="button"  data-toggle="modal" data-target="#primaryModal">Seguimiento Productos </a></li>
    </ul>
    </div>
    </div>
    </div>
    

<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-primary" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Producto</h4>
<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">

<select class="form-control" name="Producto" id="">
    <option value="pro1">Secador</option>
</select>
<br>
<textarea class="form-control" name="" id="" cols="30" rows="3">Description</textarea>
<br>    
<label for="Precio">Precio</label>
<label >_________</label>
</div>

<button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>


</div>

</div>

</div>

    

    @endsection



