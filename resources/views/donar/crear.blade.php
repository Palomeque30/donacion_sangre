@extends('layouts.app')

@section('titulo', 'Registrarse')

@section('content')
    <center>    
       <form action="{{route('donar.store')}}" method="POST"> 
           <section class="form-register">
                @csrf
                <h1 class="labels">Registrarse</h1>
                <label class="labels">Nombre</label><br>
                <input type="text" name= "nombre" required="" pattern="[a-zA-Z]+" value="{{old('nombre')}}">
                <br>
                <label class="labels">Apellido paterno</label><br>
                <input type="text" name= "apellidoP" required="" pattern="[a-zA-Z]+" value="{{old('apellidoP')}}">
                <br>
                <label class="labels">Apellido materno</label><br>
                <input type="text" name= "apellidoM" required="" pattern="[a-zA-Z]+" value="{{old('apellidoM')}}">
                <br>
                <label class="labels">Fecha de nacimiento</label><br>
                <input type="date" name= "fecha_nacimiento" required="" value="{{old('fecha_nacimiento')}}">
                <br>
                <label class="labels">Tipo de sangre</label><br>
                <input type="text" name= "tipo_sangre" required="" value="{{old('tipo_sangre')}}">
                <br>
                <label class="labels">Correo</label><br>
                <input type="text" name= "correo" required="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" value="{{old('correo')}}">
                <br>
                <label class="labels">Telefono</label><br>
                <input type="tel" name= "telefono" required="" pattern="[0-9]{10}" value="{{old('telefono')}}">
                <br><br>
                <a class="btn btn-secondary btn-sm" href="/home">Cancelar</a>
                <button class="btn btn-secondary btn-sm" type="submit">Guardar</button>
            </section>   
       </form>
    </center>
@endsection