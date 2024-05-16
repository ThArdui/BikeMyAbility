<!-- resources/views/results-bike.blade.php -->
<h1>Résultats de la recherche</h1>
@foreach ($results as $bike)
    <div class="bike-card">
        <div class="bike-preview">
            <img src="{{ $bike->Picture }}" alt="{{ $bike->Bike_name }}">
        </div>
        <h2>{{ $bike->Bike_name }}</h2>
        <p>{{ $bike->Description }}</p>
        <!-- Ajoutez d'autres attributs que vous souhaitez afficher dans la carte -->
        <a href="{{ route('expand', $bike->id) }}">Agrandir</a>
    </div>
@endforeach
