

<label for="nombre">{{'title'}}</label>
    <input type="text" name ="title" id="title"
    value="{{isset($pelicula->title)?$pelicula->title:''}}">
    <br/>

    <label for="nombre">{{'rating'}}</label>
    <input type="text" name ="rating" id="rating"
    value="{{isset($pelicula->rating)?$pelicula->rating:''}}">
    <br/>
    <label for="nombre">{{'awards'}}</label>
    <input type="text" name ="awards" id="awards"
    value="{{isset($pelicula->awards)?$pelicula->awards:''}}">
    <br/>
    <label for="nombre">{{'release_date'}}</label>
    <input type="text" name ="release_date" id="release_date"
    value="{{isset($pelicula->release_date)?$pelicula->release_date:''}}">

    <br/>
    <label for="nombre">{{'length'}}</label>
    <input type="text" name ="length" id="length"
    value="{{isset($pelicula->length)?$pelicula->length:''}}">
    <br/>
    <label for="nombre">{{'genre_id'}}</label>
    <input type="text" name ="genre_id" id="genre_id"
    value="{{isset($pelicula->genre_id)?$pelicula->genre_id:''}}">
    <br/>



    <input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
    <a href="{{url('abm')}}">Regresar</a>
