@include('header')
@extends('layouts.app')
@section('content')
<div class="container">

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">

    <ul>
        @foreach($errors->all() as $error)

        <li>{{$error}}</li>

        @endforeach
    </ul>


</div>
@endif
Crear Película

<form action="{{url('/abm')}}" class="form-horizontal" method="post" enctype="multipat/form-data">
{{csrf_field()}}

@include('abm.form',['Modo'=>'crear'])

</form>
</div>
@endsection
@include('footer')
