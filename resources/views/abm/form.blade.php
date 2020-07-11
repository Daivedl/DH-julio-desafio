
    <div class="form-group">
        <label for="title" class="control-label">{{'Título'}}</label>
        <input type="text" class="form-control" name="title" id="title"
        value="{{isset($pelicula->title)?$pelicula->title:''}}">
    </div>

    <div class="form-group">
        <label for="rating" class="control-label">{{'Rating'}}</label>
        <input type="text" class="form-control" name ="rating" id="rating"
        value="{{isset($pelicula->rating)?$pelicula->rating:''}}">
    </div>



    <div class="form-group">
        <label for="awards" class="control-label">{{'Premios'}}</label>
        <input type="text" name ="awards" class="form-control" id="awards"
        value="{{isset($pelicula->awards)?$pelicula->awards:''}}">
    </div>

    <div class="form-group">
        <label for="release_date" class="control-label">{{'Fecha de estreno'}}</label>
        <input type="text" name ="release_date" class="form-control" id="release_date"
        value="{{isset($pelicula->release_date)?$pelicula->release_date:''}}">
    </div>

    <div class="form-group">
        <label for="length" class="control-label">{{'Duración'}}</label>
        <input type="text" class="form-control" name ="length" id="length"
        value="{{isset($pelicula->length)?$pelicula->length:''}}">
    </div>

    <div class="form-group">
        <label for="genre_id" class="control-label">{{'Id de género'}}</label>
        <input type="text" class="form-control" name ="genre_id" id="genre_id"
        value="{{isset($pelicula->genre_id)?$pelicula->genre_id:''}}">
    </div>



    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
    <a class="btn btn-primary" href="{{url('abm')}}">Regresar</a>
