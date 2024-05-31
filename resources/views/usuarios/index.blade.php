@extends('layouts.app')

@section('content')
    <h1>Usuarios</h1>



    <table class="table" style="width: 70%;margin: 0% 15% 0% 15%">
        <tbody>
            <tr>
                <td> <a hfet="" class="btn btn-primary">Nuevo</a></td>
            </tr>

        </tbody>
    </table>


    <table class="table " style="width: 70%;margin: 0% 15% 0% 15%">
        <thead class="thead-dark">
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Num Documento</th>
            <th scope="col">Tipo Documento</th>
            <th scope="col">Rol</th>
            <th scope="col">Estado</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            @foreach ($usuarios as $usu)
                <tr class="table-active">
                    <td>{{ $usu->id }}</td>
                    <td> {{ $usu->usu_nombres }}</td>
                    <td> {{ $usu->usu_direccion }}</td>
                    <td>{{ $usu->usu_telefono }}</td>
                    <td>{{ $usu->usu_correo }}</td>
                    <td>{{ $usu->usu_numdocumento }}</td>
                    <td>{{ $usu->usu_tdoc_id }}</td>
                    <td> {{ $usu->usu_rol_id }}</td>
                    <td>{{ $usu->usu_estado }}</td>
                    <td> <a hfet="" class="btn btn-info">editar</a> - <a h ref=""
                            class="btn btn-danger">eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
