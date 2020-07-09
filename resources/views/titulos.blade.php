@include('header')
<div class="row mt-3">
    <div class="col-8">


        <ul>
            @forelse ($peliculas as $pelicula)
                <li>
                    {{$pelicula->title}}
                    @if ($pelicula->genero)
                    <p>Género: {{$pelicula->genero->name}}</p>
                    @endif
                </li>
            @empty
                 <p>No hay películas</p>
            @endforelse

        </ul>

        {{$peliculas->links()}}

    </div>
    <div class="col-4">
    <h3>Buscar película por título</h3>
    <form class="form-inline mt-2 mt-md-0" role="search" action="{{url('/titulos/busquedaTitulos')}}">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="ej: Avatar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    </div>
</div>
@include('footer')
