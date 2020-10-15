@extends('Layouts.users.app')
@section('content')
 
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card">
    <div class="card-header"><strong>Tus datos</strong></div>
    <div class="card-body">
    <form class="form-horizontal" action="{{route('Auth.Auth_store_company')}}" method="post">
        @csrf
    <div class="form-group row">
        <label class="col-md-3 col-form-label" for="identificacion">Nombres</label>
        <div class="col-md-9">
            <input class="form-control" id="identificacion" type="text" name="name"><span class="help-block">Ingresa tus Nombres</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label" for="identificacion">Apellidos</label>
        <div class="col-md-9">
            <input class="form-control" id="identificacion" type="text" name="lastname"><span class="help-block">Ingresa tus Apellidos</span>
        </div>
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="email-input">Email</label>
    <div class="col-md-9">
    <input class="form-control" id="email-input" type="email" name="email" placeholder="Email" autocomplete="email"><span class="help-block">Ingresa tu email</span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="password-input">Password</label>
    <div class="col-md-9">
    <input class="form-control" id="password-input" type="password" name="password" placeholder="Password" autocomplete="new-password"><span class="help-block">Ingresa una password</span>
    </div>
    <input type="text" name="rol" class="d-none" value="2">
    <input type="hidden" name="company_id" value="{{id}}">
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
