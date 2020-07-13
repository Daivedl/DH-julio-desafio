@include('header')
@if (count($peliculas))
    @foreach ($peliculas as $item)
        <h1 class="p-2 border-bottom">{{$item->title}}</h1>
        @if ($item->genero)
        <h5 class="mt-3 form-control">Género: {{$item->genero->name}}</h5>
        @endif
        <h5 class="mt-3 form-control">Rating: {{$item->rating}}</h5>
        <h5 class="mt-3 form-control">Premios: {{$item->awards}}</h5>
        <h5 class="mt-3 form-control">Fecha de lanzamiento: {{$item->release_date}}</h5>

    @endforeach
@else
<h2>No se encontraron resultados</h2>
<a href="inicio">Volver</a>
@endif
@include('footer')
