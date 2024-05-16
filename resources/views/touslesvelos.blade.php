@extends('template.projet')
@section('titre')
    bike
    @endsection
@section('content')
<h1>table bikes</h1>
<ul>
    @foreach($bikes as $bike)
    <li>{{$Bike}}</li>
    @endforeach
</ul>

@endsection
