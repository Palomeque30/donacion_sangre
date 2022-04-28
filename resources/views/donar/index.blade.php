@extends('layouts.app')

@section('titulo', 'Donar')

@section('content')
   
    <table class="table table-striped">
      <thead>
            <tr>
              <th hidden>ID</th>
              <th>Nombre</th>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Fecha de nacimiento</th>
              <th>Tipo de sangre</th>
              <th>Correo</th>
              <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donar as $item)
                <tr>
                   <td>{{$item->nombre}}</td>
                   <td>{{$item->apellidoP}}</td>
                   <td>{{$item->apellidoM}}</td>
                   <td>{{$item->fecha_nacimiento}}</td>
                   <td>{{$item->tipo_sangre}}</td>
                   <td>{{$item->correo}}</td>
                   <td>{{$item->telefono}}</td>
                </tr>
            @endforeach()
        </tbody>
    </table>
      
    <a class="btn btn-success" href="/home">Salir</a>
@endsection