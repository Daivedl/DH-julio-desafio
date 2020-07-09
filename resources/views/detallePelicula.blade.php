@include('header')
<div class="row mt-3">
    <div class="col-8">
    <h2>Película: {{$peliculas->title}} </h2>

        @if ($peliculas->genero)
        <p>Género: {{$peliculas->genero->name}}</p>
        @endif
        <p>Rating: {{$peliculas->rating}}</p>
        <p>Premios: {{$peliculas->awards}}</p>
        <p>Fecha de lanzamiento: {{$peliculas->release_date}}</p>
        @if ($peliculas->actores)
        <p>Actores:</p>
        @endif
        <ul>
        @foreach ($peliculas->actores as $actor)
        <li>
            {{$actor->getNombreCompleto()}}
        </li>
        @endforeach
        </ul>

    </div>
    <div class="col-4">
    </div>
</div>
@include('footer')
