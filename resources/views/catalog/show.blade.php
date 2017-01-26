@extends("layouts.master")

@section('title', 'Ver película')
@section("content")

  <div class="row">
    <div class="col-sm-4">
     <img src="{{$pelicula->poster}}" style="height:350px"/>
    </div>
    <div class="col-sm-8">
    <h1>{{$pelicula->title}}</h1>
    <h3>Año: {{$pelicula->year}}</h2>
    <h3>Director: {{$pelicula->director}}</h2>

    <p>
      <h4>
        <span style="font-weight: bold;">Resumen:</span> {{$pelicula->synopsis}}
      </h4>
    </p>

    <p>
      <h4>
        <span style="font-weight: bold;">Estado:</span> {{$pelicula->rented ? 'Película actualmente alquilada' : 'Película disponible'}}
      </h4>
    </p>

    <p>
      @if( $pelicula->rented)
       <button type="button" class="btn btn-danger">Devolver película</button>
      @else
        <button type="button" class="btn btn-info">Alquilar película</button>
      @endif
      <button type="button" class="btn btn-warning">Editar película</button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Volver al listado</button>
    </p>
    </div>
  </div>
@endsection
