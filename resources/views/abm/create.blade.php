@include('header')
@extends('layouts.app')
@section('content')
<div class="container">
Crear Película

<form action="{{url('/abm')}}" method="post" enctype="multipat/form-data">
{{csrf_field()}}

@include('abm.form',['Modo'=>'crear'])

</form>
</div>
@endsection
@include('footer')
