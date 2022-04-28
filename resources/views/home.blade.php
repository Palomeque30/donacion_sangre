@extends('layouts.app')

@section('titulo', 'Home')

@section('content')
   
  <div>
    <center><h1>¿QUE DESEA REALIZAR?</h1></center>
    
        <nav>
          <a class="button" href="{{route('donar.index')}}">Busca donadores disponibles</a>
          <a class="button" href="{{route('donar.create')}}">Registrarse para ser donador</a>
        </nav><br>

        <center><img src="{{asset('storage/img/altruista.jpg')}}" width="450" height="300" alt=""></center>
    </div>
@endsection
