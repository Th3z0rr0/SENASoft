@extends('layouts.users.app')
@section('content')
    <h1>Estas en la pagina de servicios</h1>
    <a href="/">Ir a welcome</a>
    <a href="{{ route('landing.acercade') }}">Ir a acerca de </a>
    <a href="{{ route('landing.servicios') }}">Ir a servicios</a>
@endsection
