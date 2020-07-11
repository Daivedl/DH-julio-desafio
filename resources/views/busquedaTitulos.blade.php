@include('header')
@if (count($peliculas))
    @foreach ($peliculas as $item)
        <h2 class="p-2 border-bottom">{{$item->title}}</h2>
        @if ($item->genero)
        <p>Género: {{$item->genero->name}}</p>
        @endif
        <p>Rating: {{$item->rating}}</p>
        <p>Premios: {{$item->awards}}</p>
        <p>Fecha de lanzamiento: {{$item->release_date}}</p>

    @endforeach
@else
<h2>No se encontraron resultados</h2>
<a href="inicio">Volver</a>
@endif
@include('footer')
