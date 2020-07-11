Sección para editar película

<form action="{{url('/abm/'.$pelicula->id)}}" method="post" enctype="multipar/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
    <label for="nombre">{{'title'}}</label>
    <input type="text" name ="title" id="title" value="{{$pelicula->title}}">
    <br/>

    <label for="nombre">{{'rating'}}</label>
    <input type="text" name ="rating" id="rating" value="{{$pelicula->rating}}">
    <br/>
    <label for="nombre">{{'awards'}}</label>
    <input type="text" name ="awards" id="awards" value="{{$pelicula->awards}}">
    <br/>
    <label for="nombre">{{'release_date'}}</label>
    <input type="text" name ="release_date" id="release_date" value="{{$pelicula->release_date}}">

    <br/>
    <label for="nombre">{{'length'}}</label>
    <input type="text" name ="length" id="length" value="{{$pelicula->length}}">
    <br/>
    <label for="nombre">{{'genre_id'}}</label>
    <input type="text" name ="genre_id" id="genre_id" value="{{$pelicula->genre_id}}">
    <br/>
    <input type="submit" value="Modificar">
    <a href="{{url('abm')}}">Regresar</a>

</form>
