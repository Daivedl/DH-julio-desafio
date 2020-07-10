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
    <div class="container mt-5">
    <h3> Buscar película por título</h3>
<!-- html agregado-->
    <div class="col-3">
        <div class="input-group">
            <input type="text" class="form-control" id="texto" placeholder="Ingrese película">
            <div class="input-group-append"><span class="input-group-text">Buscar</span></div>
        </div>
        <div id="resultados" class="bg-light border"></div>
    </div>
<!-- fin del html agregado-->
    <div class="col-8" id="contenedor">

    </div>
    <div id="cargando" hidden><h1>CARGANDO...</h1></div>
    </div>

</div>
@include('footer')
