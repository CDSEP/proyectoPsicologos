@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>This is your admin Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Settings</h1>
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
