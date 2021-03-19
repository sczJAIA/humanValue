@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>LISTADO DE TELEFONOS</h1>
@stop

@section('content')
<a href="telefonos/create" class="btn btn-success mb-4">CREAR</a>
<table id="telefonos" class="table table-light table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Persona</th>
    <th>Numero</th>
    <th>Tipo</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($telefonos as $telefono)
    <tr>
    <td> {{ $telefono->id }} </td>
    <td> {{ $telefono->nombre }} </td>
    <td> {{ $telefono->numero }} </td>
    <td> {{ $telefono->descripcion }}  </td>
    <td>
    <form action="{{ route('telefonos.destroy', $telefono->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <a href="/telefonos/{{ $telefono->id }}/edit" class="btn btn-primary">Editar</a>
    <a href="/telefonos/{{ $telefono->id }}" class="btn btn-info">Ver</a>
    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#telefonos').DataTable({
            "lengthMenu": [[5,10,50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>

@stop