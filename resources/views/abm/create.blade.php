@include('header')
Crear Película

<form action="{{url('/abm')}}" method="post" enctype="multipat/form-data">
{{csrf_field()}}

@include('abm.form',['Modo'=>'crear'])

</form>
@include('footer')
