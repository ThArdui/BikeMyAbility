<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeSearchController extends controller
{
    public function bikesearch(Request $request)
    {
        $fieldsUsed = false;
        // Récupérez les critères de recherche depuis la requête
        $searchCriteria = $request->all();

        //dd($searchCriteria["utility[0]"]);
        // Construisez la requête pour rechercher les vélos correspondants
        $bikes = Bike::query();
        // Ajoutez des conditions pour chaque critère de recherche
        if (isset($searchCriteria['utility'])) {
            if (in_array('solo', $searchCriteria['utility'])) {
                $bikes->where('Bike_use', 'solo');
            }
            if (in_array('duo', $searchCriteria['utility'])) {
                $bikes->orWhere('Bike_use', 'duo');
            }
            if (in_array('several', $searchCriteria['utility'])) {
                $bikes->orWhere('Bike_use', 'several');
            }
            $fieldsUsed = true;
        }
        // Ajoutez d'autres conditions pour les autres critères

        // Exécutez la requête
        if($fieldsUsed) {
            $results = $bikes->get();
        }
        else{
            $results = collect();
        }
        // Passez les résultats à la vue
        return view('results-bikes', ['results' => $results]);
    }
}
