@extends('vendor')
@section('content')
<div class="row content-fluid mx-auto">

    <div class="col-sm-8 mx-auto">
    <div class="card">
    <div class="card-header"><strong>Enviar Correo</strong> </div>
    <div class="card-body">
    <form action="{{route('landing.envio')}}" method="GET">
        @csrf
  
        @method('POST')
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Para : </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="email@example.com" name="email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Asunto</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="asunto" >
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mensaje</label>
                <div class="col-sm-10">
            <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>  
                </div>
              </div>

              <input type="submit" class="btn bg-success form-control text-light" value="Enviar">
            
          </form>
    
    </div>  
    </div>
    </div>
    </div>

@endsection


