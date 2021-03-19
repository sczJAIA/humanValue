@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>VER PERSONA</h1>
@stop

@section('content')
<form>
    <div class="mb-3">
        <label class="form-label" for="nombre">Nombre:</label>
        <input disabled="true"  value="{{ $persona->nombre }}" tabindex="0" class="form-control" id="nombre" name="nombre" type="text">
    </div>
    <div class="mb-3">
        <label class="form-label" for="apellido_paterno">Apellido Paterno:</label>
        <input disabled="true" value="{{ $persona->apellido_paterno }}" tabindex="1" class="form-control" id="apellido_paterno" name="apellido_paterno" type="text">
    </div>
    <div class="mb-3">
        <label class="form-label" for="apellido_materno">Apellido Materno:</label>
        <input disabled="true" value="{{ $persona->apellido_materno }}" tabindex="2" class="form-control" id="apellido_materno" name="apellido_materno" type="text">
    </div>
    <div class="mb-3">
        <label class="form-label" for="ci">CI:</label>
        <input disabled="true" value="{{ $persona->ci }}" tabindex="3" class="form-control" id="ci" name="ci" type="number">
    </div>
    <div class="mb-3">
        <label class="form-label" for="direccion">Direccion:</label>
        <input disabled="true" value="{{ $persona->direccion }}" tabindex="4" class="form-control" id="direccion" name="direccion" type="text">
    </div>
    <a href="/personas" tabindex="6" class="btn btn-danger">Back</a>
    <!-- <button type="submit" tabindex="5" class="btn btn-success">Save</button> -->
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop