@include('header')
@extends('layouts.app')
@section('content')
<div class="container">
Sección para editar película

<form action="{{url('/abm/'.$pelicula->id)}}" method="post" enctype="multipar/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('abm.form',['Modo'=>'editar'])


</form>
</div>
@endsection
@include('footer')
