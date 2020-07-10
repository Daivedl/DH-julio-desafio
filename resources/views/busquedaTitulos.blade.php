@include('header')
@if (count($peliculas))
    @foreach ($peliculas as $item)
        <p class="p-2 border-bottom">{{$item->id .' - '. $item->title}}</p>
    @endforeach
@endif
@include('footer')
