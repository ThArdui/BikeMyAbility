@extends('template.projet')
@section('titre')
    Gallerie des vélos
@endsection
<!-- changements thomas -->
@section('content')
    <h1 class="text-danger-emphasis">Galerie photo </h1>
    <p>Sur cette page vous avez la possibilité de regarder les photos de tous les vélos disponible sur notre site.</p>
    <p> Cliquez sur la photo du vélo qui vous intéresse et découvrez  plus détails sur celui-ci.</p>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach($bikes as $bike)
                <div class="col-md-2">
                    <div class="card mb-2">
                        <h2 class="card-title">{{ $bike->Bike_name }}</h2>
                        @if($bike->Picture)
                            <a href="{{ route('details.velo', $bike->id) }}">
                                <img src="{{ asset('' . $bike->Picture) }}" class="card-img-top" alt="Vélo adapté pour les handicaps suivants: {{ $bike->Disability_type }}. Le nom du vélo est {{ $bike->Bike_name }}">
                            </a>
                        @else
                            <img src="path/to/placeholder/image.jpg" class="card-img-top" alt="Pas d'image disponible">
                        @endif
                        <div class="card-body">

                            <p class="card-text">Adapté pour: {{ $bike->Disability_type }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
