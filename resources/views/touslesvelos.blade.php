@extends('template.projet')
@section('titre')
Gallerie des velos
    @endsection
@section('content')
<h1>table bikes</h1>
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
    <div>
@foreach($bikes as $bike)
            <div>
                <h2>{{ $bike->Bike_name }}</h2>
                <p>{{ $bike->Description }}</p>
                @if($bike->Picture)
                    <img src="{{ asset('storage/' . $bike->Picture) }}" alt="{{ $bike->Bike_name }}" style="width:200px;height:auto;">
                @else
                    <p>Pas d'image disponible</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection
