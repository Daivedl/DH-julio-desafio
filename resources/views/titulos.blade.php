@include('header')
<div class="row mt-3">
    <div class="col-8">


        <ul>
            @forelse ($peliculas as $pelicula)
                <li>
                <h2 class="form-control mt-3 bg-primary text-light">{{$pelicula->title}}</h2>
                    @if ($pelicula->genero)
                    <p class="form-control mb-3 text-dark">Género: {{$pelicula->genero->name}}</p>
                    @endif
                </li>
            @empty
                 <p>No hay películas</p>
            @endforelse

        </ul>

        {{$peliculas->links()}}
        <a class="btn btn-primary btn-sm" href="{{url('/inicio')}}">Volver</a>
    </div>


</div>

@include('footer')
