
    <div class="form-group">
        <label for="title" class="control-label">{{'Título'}}</label>
        <input type="text" class="form-control {{$errors->has('title')?'is-invalid':''}} " name="title" id="title"
        value="{{isset($pelicula->title)?$pelicula->title:old('title')}}">
        {!! $errors->first('title','<div class="invalid-feedback">:message</div>') !!}


    </div>

    <div class="form-group">
        <label for="rating" class="control-label">{{'Rating'}}</label>
        <input type="text" class="form-control {{$errors->has('rating')?'is-invalid':''}} " name ="rating" id="rating"
        value="{{isset($pelicula->rating)?$pelicula->rating:old('rating')}}">
        {!! $errors->first('rating','<div class="invalid-feedback">:message</div>') !!}
    </div>



    <div class="form-group">
        <label for="awards" class="control-label">{{'Premios'}}</label>
        <input type="text" name ="awards" class="form-control {{$errors->has('awards')?'is-invalid':''}} " id="awards"
        value="{{isset($pelicula->awards)?$pelicula->awards:old('awards')}}">
        {!! $errors->first('awards','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="release_date" class="control-label">{{'Fecha de estreno'}}</label>
        <input type="text" name ="release_date" class="form-control {{$errors->has('release_date')?'is-invalid':''}} " id="release_date"
        value="{{isset($pelicula->release_date)?$pelicula->release_date:old('release_date')}}">
        {!! $errors->first('release_date','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="length" class="control-label">{{'Duración'}}</label>
        <input type="text" class="form-control {{$errors->has('length')?'is-invalid':''}}" name ="length" id="length"
        value="{{isset($pelicula->length)?$pelicula->length:old('length')}}">
        {!! $errors->first('length','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="genre_id" class="control-label">{{'Id de género'}}</label>
        <input type="text" class="form-control {{$errors->has('genre_id')?'is-invalid':''}}" name ="genre_id" id="genre_id"
        value="{{isset($pelicula->genre_id)?$pelicula->genre_id:old('genre_id')}}">
        {!! $errors->first('genre_id','<div class="invalid-feedback">:message</div>') !!}
    </div>



    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
    <a class="btn btn-primary" href="{{url('abm')}}">Regresar</a>
