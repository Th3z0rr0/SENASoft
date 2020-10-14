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
    <tbody>
    <tr>
    <td>Yiorgos Avraamu</td>
    <td>2012/01/01</td>
    <td>Member</td>
    <td><a href="{{route('landing.detallesfactura')}}"><span class="badge badge-secondary">Detalles</span></a></td>
    </tr>
    <tr>
    <td>Avram Tarasios</td>
    <td>2012/02/01</td>
    <td>Staff</td>
    <td><a href=""><span class="badge badge-secondary">Detalles</span></a></td>    </tr>
    <tr>
    <td>Quintin Ed</td>
    <td>2012/02/01</td>
    <td>Admin</td>
    <td><a href=""><span class="badge badge-secondary">Detalles</span></a></td>    </tr>
    <tr>
    <td>Enéas Kwadwo</td>
    <td>2012/03/01</td>
    <td>Member</td>
    <td><a href=""><span class="badge badge-secondary">Detalles</span></a></td>    </tr>
    <tr>
    <td>Agapetus Tadeáš</td>
    <td>2012/01/21</td>
    <td>Staff</td>
    <td><a href=""><span class="badge badge-secondary">Detalles</span></a></td>    </tr>
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
