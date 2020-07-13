@include('header')
<div class="row mt-3">
    <div class="col-8">
    <h2 class="mb-3">Película: {{$peliculas->title}} </h2>

        @if ($peliculas->genero)
        <h5 class="mb-3 form-control">Género: {{$peliculas->genero->name}}</h5>

        @endif
        <h5 class="mb-3 form-control">Rating: {{$peliculas->rating}}</h5>

        <h5 class="mb-3 form-control">Premios: {{$peliculas->awards}}</h5>

        <h5 class="mb-3 form-control">Fecha de lanzamiento: {{$peliculas->release_date}}</h5>

        @if ($peliculas->actores)
        <h5 class="mb-3 form-control">Actores:</h5>
        @endif
        <ul>
        @foreach ($peliculas->actores as $actor)
        <li>
        <p class="form-control">{{$actor->getNombreCompleto()}}</p>

        </li>
        @endforeach
        </ul>
    <a class="btn btn-primary btn-sm" href="{{url('/inicio')}}">Volver</a>
    </div>

</div>
@include('footer')
