@include('header')

<div class="row mt-3">
    <div class="col-8">
        <h1 class="mb-5">Películas que pueden interesarte</h1>

        <ul>

            @forelse($peliculas as $pelicula)
                <li class="mb-4">
                <h4 class="d-inline form-control">{{$pelicula["title"]}}</h4>
                <div class="col-6 d-inline">
                <a class="btn btn-primary btn-sm d-inline" href="{{url('/detallePelicula/'.$pelicula->id)}}">Ver detalles</a>
                </div>

                </li>

            @empty
                <p>No hay películas</p>
            @endforelse

        </ul>

    </div>
    <div class="col-4">
        <h2 class="mt-2 mb-5">Últimas 5 películas</h2>
        <ul>
            @forelse($peliculasUltimas as $peliculasUltima)
                <li class="mb-4">
                <h6 class="d-inline form-control">{{$peliculasUltima["title"]}}</h6>

                <div class="col-6 d-inline">
                <a class="btn btn-primary btn-sm d-inline"href="{{url('/detallePelicula/'.$peliculasUltima->id)}}">Ver detalles</a>

                </div>

                </li>
            @empty
                <p>No hay películas</p>
            @endforelse
        </ul>
    </div>
</div>
@include('footer')
