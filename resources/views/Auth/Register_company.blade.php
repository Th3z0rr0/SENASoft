@extends('Layouts.users.app')
@section('content')
 
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card">
    <div class="card-header"><strong>Datos de tu</strong> Empresa</div>
    <div class="card-body">
    <form class="form-horizontal" action="{{route('Auth.Auth_store_company')}}" method="post">
        @csrf
    <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nombre de tu empresa</label>
        <div class="col-md-9">
            <input class="form-control" id="text-input" type="text" name="company_name" placeholder="Text"><span class="help-block">This is a help text</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Nit</label>
        <div class="col-md-9">
            <input class="form-control" id="text-input" type="text" name="nit" placeholder="Text"><span class="help-block">This is a help text</span>
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
