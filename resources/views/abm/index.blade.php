@include('header')
@extends('layouts.app')
@section('content')
<div class="container">
@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{Session::get('Mensaje')}}
</div>


@endif
<a href="{{url('abm/create')}}" class="btn btn-success" >Agregar Película</a>
<br>
<br>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>rating</th>
            <th>Premios</th>
            <th>Fecha de estreno</th>
            <th>Duración</th>
            <th>Id género</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($peliculas as $pelicula)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$pelicula->title}}</td>
            <td>{{$pelicula->rating}}</td>
            <td>{{$pelicula->awards}}</td>
            <td>{{$pelicula->release_date}}</td>
            <td>{{$pelicula->length}}</td>
            <td>{{$pelicula->genre_id}}</td>
            <td>

            <a class="btn btn-warning" href="{{url('/abm/'.$pelicula->id.'/edit')}}">
            Editar
            </a>



            <form method="post" action="{{url('/abm/'.$pelicula->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>

            </form>

            </td>
        </tr>
    @endforeach
    </tbody>

</table>

{{$peliculas->links()}}
</div>
@endsection
@include('footer')
