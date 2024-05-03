<!-- resources/views/results-bike.blade.php -->
<h1>Résultats de la recherche</h1>
<ul>
    @foreach ($results as $bikes_table)
        <li>{{ $bikes_table-> name }}</li>
        <!-- Affichez d'autres attributs du vélo -->
    @endforeach
</ul>
