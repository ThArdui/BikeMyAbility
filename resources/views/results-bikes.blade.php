<!-- resources/views/results-bike.blade.php -->
<h1>Résultats de la recherche</h1>
<ul>
    @foreach ($results as $bikes_table)
        <li>{{ $bikes_table-> name }}</li>
        <!-- Affichez d'autres attributs du vélo -->
    @endforeach
</ul>
@foreach($results as $bikes)
    <div class="cadre-velo">
        <img src="{{$bikes->image}}" alt="{{$bikes->name}}">
        <p>{{$bikes->description}}</p>
        <a href="{{route('bike.detail',$bikes->id)}}">
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>

@endforeach
