@extends('layouts.app')

@section('content')
    <h1>Roles</h1>



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
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            @foreach ($roles as $usu)
                <tr class="table-active">
                    <td>{{ $usu->id }}</td>
                    <td> {{ $usu->CLI_NOMBRES }}</td>
                    <td> {{ $usu->CLI_descripcion }}</td>
                    <td>{{ $usu->CLI_estado }}</td>
                    <td> <a hfet="" class="btn btn-info">editar</a> - <a h ref=""
                            class="btn btn-danger">eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
