@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>LISTADO DE PERSONAS</h1>
@stop

@section('content')
<a href="personas/create" class="btn btn-success mb-4">CREAR</a>
    <table id="personas" class="table table-light table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($personas as $persona)
    <tr>
    <td> {{ $persona->id }} </td>
    <td> {{ $persona->nombre }} </td>
    <td> {{ $persona->apellido_paterno . ' ' . $persona->apellido_materno }} </td>
    <td>
    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <a href="/personas/{{ $persona->id }}/edit" class="btn btn-primary">Editar</a>
    <a href="/personas/{{ $persona->id }}" class="btn btn-info">Ver</a>
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
        $('#personas').DataTable({
            "lengthMenu": [[5,10,50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>

@stop