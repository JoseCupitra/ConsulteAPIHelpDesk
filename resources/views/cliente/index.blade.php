@extends('home')

@section('content')

<div class="row">
    <div class="col-m2-2"></div>
    <div class="col-m2-8">
        <br><br>
        <h3>LISTA DE CLIENTES</h3>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            NUEVO
          </button>
          <br>
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">CORREO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr class="">
                        <td scope="row"> {{$cliente->id}} </td>
                        <td>{{$cliente->Nombre}} </td>
                        <td>{{$cliente->Telefono}}</td>
                        <td>{{$cliente->Correo}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$cliente->id}}">
                                Editar
                              </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$cliente->id}}">
                                Eliminar
                                </button>
                        <td>
                    </tr>
                    @include('cliente.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('cliente.create')
</div>
    <div class="col-m2-2"></div>
</div>



@endsection
