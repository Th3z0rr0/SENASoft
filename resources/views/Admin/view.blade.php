@extends('layouts.users.app')
@section('content')
<div class="c-body">
<main class="c-main">
<div class="container-fluid">
<div class="fade-in">
<div class="card">
<div class="card-header">Sucursales</div>
<div class="card-body">
<table class="table table-striped table-bordered datatable">
<thead>
<tr>
<th>Username</th>
<th>Date registered</th>
<th>Role</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>Anton Phunihel</td>
<td>2012/01/01</td>
<td>Member</td>
<td><span class="badge badge-success">Active</span></td>
<td><a class="btn btn-success" href="#"><i class="c-icon fas fa-search"></i></a>
    <a class="btn btn-info" href="#"><i class="c-icon fas fa-file-alt"></i></a>
    <a class="btn btn-danger" href="#"><i class="c-icon fas fa-trash"></i></a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
