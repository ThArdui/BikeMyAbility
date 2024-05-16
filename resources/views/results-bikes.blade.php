<!-- resources/views/results-bike.blade.php -->
<h1>Résultats de la recherche</h1>
<ul>
    @foreach ($results as $bike)
        <li>{{ $bike->Bike_name }}</li>
        <!-- Affichez d'autres attributs du vélo -->
    @endforeach
</ul>
@foreach($results as $bike)
    <div class="cadre-velo">
        <img src="{{$bike->Picture}}" alt="{{$bike->Bike_name}}">
        <p>{{$bike->Description}}</p>
        {{--
         <a href="{{route('bike.detail',$bikes->id)}}">
             <i class="fas fa-arrow-right"></i>
         </a>
         --}}
    </div>

@endforeach
