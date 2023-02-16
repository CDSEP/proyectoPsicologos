@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Historiales Clínicos</h1>
@stop

@section('content')

    <div class="mb-3">
        <div class="clearfix">
            <div class="input-group rounded w-25">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
            </div>
            <button type="button" class="btn btn-primary float-right ml-2">Agregar Nuevo</button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Alfaro Ruíz Juan Alejandro</h1>
            <button class="btn-primary float-right ml-2"><i class="fa fa-home"></i></button>
        </div>
        <div class="car-body">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Anguiano Aguilar Marcela</h1>
            <button class="btn-primary float-right ml-2"><i class="fa fa-home"></i></button>
        </div>
        <div class="car-body">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Bernal Reyes Jair</h1>
            <button class="btn-primary float-right ml-2"><i class="fa fa-home"></i></button>
        </div>
        <div class="car-body">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Corral Hernandez Javier</h1>
            <button class="btn-primary float-right ml-2"><i class="fa fa-home"></i></button>
        </div>
        <div class="car-body">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Dimas Segura Vanesa</h1>
            <button class="btn-primary float-right ml-2"><i class="fa fa-home"></i></button>
        </div>
        <div class="car-body">
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Estrada Serrano Viridiana</h1>
            <button class="btn-primary float-right ml-2"><i class="fa fa-home"></i></button>
        </div>
        <div class="car-body">
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
