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
        if (isset($searchCriteria['Use_duo'])) {
            $query->where('Use_duo', true);
        }
        if (isset($searchCriteria['Use_several'])) {
            $query->where('Use_several', true);
        }
        if (isset($searchCriteria['Use_uselegs'])) {
            $query->where('Use_uselegs', true);
        }
        if (isset($searchCriteria['Use_usearms'])) {
            $query->where('Use_usearms', true);
        }
        if (isset($searchCriteria['Use_balance'])) {
            $query->where('Use_balance', true);
        }
        if (isset($searchCriteria['Use_dexterity'])) {
            $query->where('Use_dexterity', true);
        }
        if (isset($searchCriteria['Use_pedal'])) {
            $query->where('Use_pedal', true);
        }

        // Ajoutez d'autres conditions pour les autres critères

        // Exécutez la requête
        $results = $query->get();

        // Passez les résultats à la vue
        return view('results-bikes', ['results' => $results]);
    }
    public function showBike(Request $request)
    {
        // Récupérez les attributs booléens du formulaire
        $solo = $request->input('solo');


        // Effectuez la requête pour récupérer les résultats de la table 'bikes'
        $results = bikes_table::where('solo', $solo)

            ->get();

        // Passez les résultats à la vue 'results-bikes'
        return view('results-bikes', ['results' => $results]);
    }

}
