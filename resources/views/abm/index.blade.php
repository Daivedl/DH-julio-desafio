@include('header')
Inicio - Despliegue de datos

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>title</th>
            <th>rating</th>
            <th>awards</th>
            <th>release_date</th>
            <th>length</th>
            <th>genre_id</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($peliculas as $pelicula)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$pelicula->title}}</td>
            <td>{{$pelicula->rating}}</td>
            <td>{{$pelicula->awards}}</td>
            <td>{{$pelicula->release_date}}</td>
            <td>{{$pelicula->length}}</td>
            <td>{{$pelicula->genre_id}}</td>
            <td>Editar |

            <form method="post" action="{{url('/abm/'.$pelicula->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>

            </form>

            </td>
        </tr>
    @endforeach
    </tbody>

</table>
@include('footer')
