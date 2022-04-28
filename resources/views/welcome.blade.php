@extends('layouts.app')

@section('titulo', 'Principal')

@section('content')
<center><h1>BIENVENIDOS</h1></center><br>

<div class="row justify-content-center">
    <div class="col-2">
        <img src="{{asset('storage/img/principal.jpg')}}" alt="">      
    </div>
    <div class="col-6">
        <i class="fa fa-align-justify" aria-hidden="true">  
        <h3><span>1 </span>Objetivo</h3>
        <p>Esta pagina tiene la finalidad de ayudar a las personas a buscar donadores de sangre y asi poder reducir el tiempo de búsqueda</p>
        <h3><span>2 </span>Ayuda A Personas</h3>
        <p>Reduce la probabilidad de no enconrtar los donadores, en esta aplicacion es muy segura y confiable</p>      
    </div>
</div><br>
</div>

<div class="texto-header">
<a href="/desarrolladores">DESARROLLADO POR:</a>
</div>



    

@endsection

