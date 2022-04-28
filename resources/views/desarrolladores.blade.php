@extends('layouts.app')

@section('titulo', 'Desarrolladores')

@section('content')
<h1>Desarrolladores:</h1>
<div class="row align-items-center">
    <div class="col-4">
        <p><div class="card" style="width: 18rem;">
      <img src="{{asset('storage/img/lalo.jpg')}}" class="card-img-top" alt="" width="500" height="300">
      <div class="card-body">
        <p class="card-text">Eduardo Enrique Morales Nárez</p>
      </div>
   </div></p>      
    </div>
    <div class="col-4">
        <p><div class="card" style="width: 18rem;">
      <img src="{{asset('storage/img/litzy.jpg')}}" class="card-img-top" alt="" width="500" height="400">
      <div class="card-body">
        <p class="card-text">Litzy Citlaly Palomeque Rios</p>
      </div>
   </div></p>      
    </div>
    <div class="col-4">
        <p><div class="card" style="width: 18rem;">
      <img src="{{asset('storage/img/manuel.jpg')}}" class="card-img-top" alt="" width="500" height="400">
      <div class="card-body">
        <p class="card-text">Manuel Reyes Rey</p>
      </div>
   </div></p>      
    </div>
</div>

<a class="btn btn-success" href="/">Salir</a>
@endsection