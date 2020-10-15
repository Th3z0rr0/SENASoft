@extends('Layouts.users.app')
@section('content')
 
<section class="mx-5">       
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1 class="text-info">Siigo</h1>
    <div class="card">
    <div class="card-header"><strong>Login</strong></div>
    <div class="card-body">
    <form class="form-horizontal" action="{{route('Auth.Auth')}}" method="post">
        @csrf
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="email-input">Email</label>
    <div class="col-md-9">
    <input class="form-control" id="email-input" type="email" name="email" placeholder="Email" autocomplete="email"><span class="help-block">Ingresa tu email</span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="password-input">Password</label>
    <div class="col-md-9">
    <input class="form-control" id="password-input" type="password" name="password" placeholder="Password" autocomplete="new-password"><span class="help-block">Ingresa tu contraseña</span>
    </div>
    </div>
    <div class="card-footer d-flex justify-content-center">
        <a class="" href="#">¿Ya tienes una cuenta? registrate</a>
    </div>
    <div class="card-footer d-flex justify-content-center">
    <button class="btn btn-md btn-primary mx-3" type="submit">Ingreso</button>
    <button class="btn btn-md btn-danger mx-3" type="reset"> Cancelar</button>
    </div>
    </form>
    </div>
    </div>
    <div class="col-md-3"></div>
</section>

@endsection
