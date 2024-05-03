<?php

namespace App\Http\Controllers;

use App\Models\BikeSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BikeSearchController extends controller
{
    public function bikesearch(Request $request)
    {
        // Récupérez les critères de recherche depuis la requête
        $searchCriteria = $request->all();

        // Construisez la requête pour rechercher les vélos correspondants
        $query = BikeSearch::query();

        // Ajoutez des conditions pour chaque critère de recherche
        if (isset($searchCriteria['Use_solo'])) {
            $query->where('Use_solo', true);
        }
        // Ajoutez d'autres conditions pour les autres critères

        // Exécutez la requête
        $results = $query->get();

        // Passez les résultats à la vue
        return view('results-bikes', ['results' => $results]);
    }
}
