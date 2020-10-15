@extends('vendor')
@section('content')


<div class="row content-fluid mx-auto">

    <div class="col-sm-8 mx-auto">
    <div class="card">
    <div class="card-header"><strong>Venta</strong> <small>Form</small></div>
    <div class="card-body">



        <div class="row">
            <div class="form-group col-sm-6">
            <label for="idfactura;">Id Factura: </label>
            <label name="idfactura;"></label>
            </div>
            <div class="form-group col-sm-6">
            <label for="idproducto">Id Producto</label>
            <label name="idproducto"></label>
            </div>
            </div>
        <div class="row">
            
            <div class="form-group col-sm-6">
            <label for="idcliente">Id Cliente: </label>
            <label name="idcliente"></label>
            </div>
            <div class="form-group col-sm-6">
            <label for="Producto">Producto</label>
            <label name="producto"></label>
            </div>
            </div>
             <div class="row">
                <div class="form-group col-sm-6">
                <label for="cliente">Cliente</label>
                <label name="cliente"></label>

                </div>
                <div class="form-group col-sm-6">
                <label for="cantidad">Cantidad</label>
                <label name="cantidad"></label>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                    <label for="fecha">Fecha</label>
                    <label name="fecha"></label>
                    </div>
                    <div class="form-group col-sm-6">
                    <label for="preunidad">Pre. Unidad</label>
                    <label name="preunidad"></label>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                    <label for="Ciudad">Ciudad</label>
                    <label name="Ciudad"></label>
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
        <a href=""  class="btn btn-danger float-left position-absolute"> Cancelar</a>
        <input type="submit" class="btn btn-success float-right"value="Descargar PDF">
        </div>
    </div>
</div>
    
    </div>
    </div>
    </div>
    

    @endsection