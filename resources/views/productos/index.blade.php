@extends('layouts.app')

@section('content')
    <h1>Productos</h1>



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
            <th scope="col">Tipo Documento</th>
            <th scope="col">Num Cedula</th>
            <th scope="col">Correo</th>
            <th scope="col">Celular</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Estado</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            @foreach ($productos as $usu)
                <tr class="table-active">
                    <td>{{ $usu->id }}</td>
                    <td> {{ $usu->CLI_NOMBRES }}</td>
                    <td> {{ $usu->CLI_TIPODOCUMENTO }}</td>
                    <td>{{ $usu->CLI_CEDULA }}</td>
                    <td>{{ $usu->CLI_CORREO }}</td>
                    <td>{{ $usu->CLI_CELULAR }}</td>
                    <td> {{ $usu->CLI_DIRECCION }}</td>
                    <td>{{ $usu->CLI_CIUDAD_ID }}</td>
                    <td>{{ $usu->CLI_ESTADO }}</td>
                    <td> <a hfet="" class="btn btn-info">editar</a> - <a h ref=""
                            class="btn btn-danger">eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
