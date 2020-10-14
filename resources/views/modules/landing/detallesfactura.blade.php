@extends('vendor')
@section('content')


<div class="row content-fluid mx-auto">

    <div class="col-sm-8 mx-auto">
    <div class="card">
    <div class="card-header"><strong>Venta</strong> <small>Form</small></div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-sm-6">
            <label for="Producto;">Producto: </label>
            <label name="Producto;"></label>
            </div>
            <div class="form-group col-sm-6">
            <label for="Cantidad">Cantidad</label>
            <label name="Cantidad;"></label>
            </div>
            </div> <div class="row">
                <div class="form-group col-sm-6">
                <label for="Fecha">Fecha</label>
                <label name="Fecha"></label>

                </div>
                <div class="form-group col-sm-6">
                <label for="Precio unidad">Precio unidad</label>
                <label name="Precio unidad"></label>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                    <label for="idfatura">N° Factura</label>
                    <label name="idfactura"></label>
                    </div>
                    <div class="form-group col-sm-6">
                    <label for="idcliente">N° Cliente</label>
                    <label name="idcliente"></label>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                    <label for="Cliente">Cliente</label>
                    <label name="Cliente"></label>
                    </div>
                    <div class="form-group col-sm-6">
                    <label for="IVA">IVA</label>
                    <label name="IVA"></label>
                    </div>
                    </div>
    <div class="row">
    <div class="form-group col-sm-6">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" class="form-control" id="" cols="30" rows="3"></textarea>
    </div>
    <div class="form-group col-sm-6">
    <label for="total">Total</label>
<label name="total"></label>    </div>
    <div class="form-group col-sm-12">
        <input type="submit" class="btn btn-success float-right"value="ENVIAR">
        </div>
    </div>
</div>
    
    </div>
    </div>
    </div>
    

    @endsection