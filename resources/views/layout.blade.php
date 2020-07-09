@include('header')
<div class="row mt-3">
    <div class="col-8">
        <h1>Películas que pueden interesarte</h1>
        <ul>
            @forelse($peliculas as $pelicula)
                <li>

                <a href="detallePelicula.php">{{$pelicula["title"]}}</a>

                </li>
            @empty
                <p>No hay películas</p>
            @endforelse
        </ul>

    </div>
    <div class="col-4">
        <h2>Últimas 5 películas</h2>
        <ul>
            @forelse($peliculasUltimas as $peliculasUltima)
                <li>

                <a href="detallePelicula.php">{{$peliculasUltima["title"]}}</a>

                </li>
            @empty
                <p>No hay películas</p>
            @endforelse
        </ul>
    </div>
</div>
@include('footer')
