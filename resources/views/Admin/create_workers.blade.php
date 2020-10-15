@extends('Admin.users.app')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card">
    <div class="card-header"><strong>Registro de empleados</strong></div>
    <div class="card-body">
    <form class="form-horizontal" action="{{route('Auth.Auth_store_user')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="Identificacion">Identificacion</label>
            <div class="col-md-9">
                <input class="form-control" id="Identificacion" type="text" name="identificacion"><span class="help-block">Ingresa identificacion</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name">Nombres</label>
            <div class="col-md-9">
                <input class="form-control" id="name" type="text" name="name"><span class="help-block">Ingresa Nombres</span>
            </div>
        </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label" for="lastname">Apellidos</label>
        <div class="col-md-9">
            <input class="form-control" id="lastname" type="text" name="lastname"><span class="help-block">Ingresa Apellidos</span>
        </div>
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="email-input">Email</label>
    <div class="col-md-9">
    <input class="form-control" id="email-input" type="email" name="email" placeholder="Email" autocomplete="email"><span class="help-block">Ingresa email</span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="password-input">Password</label>
    <div class="col-md-9">
    <input class="form-control" id="password-input" type="password" name="password" placeholder="Password" autocomplete="new-password"><span class="help-block">Ingresa password</span>
    </div>
    <input type="text" name="rol" class="d-none" value="2">
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="select1">Cargo</label>
    <div class="col-md-9">
    <select class="form-control" id="select1" name="select1">
    <option value="0">Selecciona el rol en la empresa</option>
    <option value="3">Vendedor</option>
    <option value="4">Operario</option>
    </select>
    </div>
    </div>    
    </div>
    <div class="card-footer">
    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
    <a class="btn btn-sm btn-danger" href="{{route('Auth.login')}}">Reset</a>
    </div>
    </form>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection
