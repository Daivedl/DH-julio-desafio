@include('header')
Crear Película

<form action="{{url('/abm')}}" method="post" enctype="multipat/form-data">
{{csrf_field()}}
    <label for="nombre">{{'title'}}</label>
    <input type="text" name ="title" id="title" value="">
    <br/>

    <label for="nombre">{{'rating'}}</label>
    <input type="text" name ="rating" id="rating" value="">
    <br/>
    <label for="nombre">{{'awards'}}</label>
    <input type="text" name ="awards" id="awards" value="">
    <br/>
    <label for="nombre">{{'release_date'}}</label>
    <input type="text" name ="release_date" id="release_date" value="">

    <br/>
    <label for="nombre">{{'length'}}</label>
    <input type="text" name ="length" id="length" value="">
    <br/>
    <label for="nombre">{{'genre_id'}}</label>
    <input type="text" name ="genre_id" id="genre_id" value="">
    <br/>

    <a href="{{url('abm')}}">Regresar</a>

    <input type="submit" value="Agregar">
</form>
@include('footer')
