@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>CREAR TELEFONO</h1>
@stop

@section('content')
<form action="/telefonos" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="numero">Numero:</label>
        <input required tabindex="0" class="form-control" id="numero" name="numero" type="number">
    </div>
    <div class="mb-3">
        <label class="form-label" for="tipo">Tipo:</label>
        <select class="form-control" name="tipo" id="tipo">
            @foreach ($tipos as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->descripcion }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label" for="persona">Persona:</label>
        <select class="form-control" name="persona" id="persona">
            @foreach ($personas as $persona)
            <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
            @endforeach
        </select>
    </div>
    <a href="/telefonos" tabindex="6" class="btn btn-danger">Back</a>
    <button type="submit" tabindex="5" class="btn btn-success">Save</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop