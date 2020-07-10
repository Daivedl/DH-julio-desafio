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


</div>
@include('footer')
