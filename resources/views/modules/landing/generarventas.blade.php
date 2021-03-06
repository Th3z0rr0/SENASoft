@extends('vendor')
@section('content')
<div class="row content-fluid mx-auto">

    <div class="col-sm-8 mx-auto">
    <div class="card">
    <div class="card-header"><strong>Venta</strong> </div>
    <div class="card-body">
    <form action="{{route('recordar')}}" method="post">
        @csrf
    
        <div class="row">
            <div class="form-group col-sm-6">
            <label for="Producto">Producto</label>
            <select class="form-control" name="product" value="{{old('product')}}">
                <option>Producto</option>
                <option>Producto2</option>
                <option>Producto3</option>
                <option>Producto4</option>
              </select>
            </div>
            <div class="form-group col-sm-6">
            <label for="Cantidad">Cantidad</label>
            <input   class="form-control"  id="postal-code" type="number" name="quantity" placeholder="cant..">
            </div>
            </div> <div class="row">
                <div class="form-group col-sm-6">
                <label for="Fecha">Fecha</label>
                <input class="form-control"  name="date" type="date" name="fecha">
                </div>
                <div class="form-group col-sm-6">
                <label for="Precio unidad">Precio unidad</label>
                <input class="form-control" name="price"  type="number">
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                    <label for="Cliente">Cliente</label>
                    <input class="form-control" name="cliente" type="text" >
                    </div>
                    <div class="form-group col-sm-6">
                    <label for="IVA">IVA</label>
                    <input class="form-control" name="iva" type="number" placeholder="19%">
                    </div>
                    </div>
    <div class="row">
    
    <div class="form-group col-sm-6 float-right">
    <label for="total">Total</label>
    <input class="form-control " id="postal-code" type="text" placeholder="2000" name="total" >
    </div>
    <div class="form-group col-sm-12">
        <input type="submit" class="btn btn-success float-right"value="ENVIAR">
        </div>
    </div>
</div>
</form>
    </div>
    </div>
    </div>

@endsection
