<style>
#emp{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100;
}

#emp td, #emp th{
    border: 1px solid #ddd;
    padding: 8px;
}
#emp th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: #fff;
}
</style>
<table id="emp" class="table table-light table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>CI</th>
    <th>Direccion</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($personas as $persona)
    <tr>
    <td> {{ $persona->id }} </td>
    <td> {{ $persona->nombre }} </td>
    <td> {{ $persona->apellido_paterno . ' ' . $persona->apellido_materno }} </td>
    <td> {{ $persona->ci }} </td>
    <td> {{ $persona->direccion }} </td>
    </tr>
    @endforeach
    </tbody>
    </table>