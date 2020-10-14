@extends('layouts.users.app')
@section('content')
    <h1>Estas en la pagina de Operario</h1>
    <button class="btn btn-success " type="button">Crear Nuevo producto</button>
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
        <th>Dimensiones</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>Juego de copas</td>
        <td>Este juego de copas se usuara para los arreglos que necesites</td>
        <td>50000</td>
        <td>1000</td>
        <td>50cm*40cm</td>
        <td>

                <button class="btn btn-warning btn-sm" type="button">Editar</button>
             
                <button class="btn  btn-danger btn-sm " type="button">Eliminar</button>
            
        </td>
        </tr>
        <tr>
        <td>Martillos</td>
        <td>Estos martillos estan echos en acero resistente para una mayor resistencia</td>
        <td>80000</td>
        <td>300</td>
        <td>60cm*20cm</td>
        <td>

            <button class="btn btn-warning btn-sm" type="button">Editar</button>
         
            <button class="btn  btn-danger btn-sm " type="button">Eliminar</button>
        
        </td>
        </tr>
        <tr>
        <td>Ruedas de carro</td>
        <td>Ruedas para rin de 21 pulgadas</td>
        <td>150000</td>
        <td>700</td>
        <td>70cm*50cm</td>
        <td>

            <button class="btn btn-warning btn-sm" type="button">Editar</button>
         
            <button class="btn  btn-danger btn-sm " type="button">Eliminar</button>
        
        </td>       
        </tr>
        <tr>
        <td>Tornillos</td>
        <td>Tornillos de estrella para reparaciones caseras o uso industrial</td>
        <td>4000</td>
        <td>7000</td>
        <td>4cm*3mm</td>
        <td>

            <button class="btn btn-warning btn-sm" type="button">Editar</button>
         
            <button class="btn  btn-danger btn-sm " type="button">Eliminar</button>
        
        </td>
        </tr>
        <tr>
        <td>Destornilladores</td>
        <td>Destornillador de pala paratornillos grandes</td>
        <td>30000</td>
        <td>2000</td>
        <td>50cm*2cm</td>
        <td>

            <button class="btn btn-warning btn-sm" type="button">Editar</button>
         
            <button class="btn  btn-danger btn-sm " type="button">Eliminar</button>
        
        </td>
        </tr>
        </tbody>
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
