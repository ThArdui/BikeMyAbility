<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BikeSearchController extends controller
{
    // BikeSearchController.php
    public function SearchBikes(Request $request)
    {
        $fieldsUsed = false;
        $searchCriteria = $request->all();
//dd($searchCriteria["utility[0]"]);
        $bikes = Bike::query();
// handicap  ok
        if (isset($searchCriteria['handicap']) && !empty($searchCriteria['handicap'])) {
            $disabilityTypes = (array)$searchCriteria['handicap'];
           foreach ($disabilityTypes as $disabilityType) {
                $bikes->where('Disability_type', 'LIKE', '%' . $disabilityType . '%');
                $fieldsUsed = true;
           }
        }
// assistance electrique ok
        if (isset($searchCriteria['electrical_assistance']) && !empty($searchCriteria['electrical_assistance'])) {
            $electricalAssistance = $searchCriteria['electrical_assistance'];

            if ($electricalAssistance === 'oui_assistance_electric') {
                $bikes->where('Electrical_assistance', 1);
                $fieldsUsed = true;
            } elseif ($electricalAssistance === 'non_assistance_electric') {
                $bikes->where('Electrical_assistance', 0);
                $fieldsUsed = true;
            }
        }
// solo duo several ok
        if (isset($searchCriteria['utility']) && !empty($searchCriteria['utility'])) {
            $utility = (array)$searchCriteria['utility'];
            if (count($utility) > 0) {
                $bikes->whereIn('Bike_use', $utility);
                $fieldsUsed = true;
            }
        }
//type de pedalage ok
        if (isset($searchCriteria['pedal']) && !empty($searchCriteria['pedal'])){
            $pedal= (array)$searchCriteria['pedal'];
        if (count($pedal) > 0) {
            $bikes->whereIn('Pedal_way',$pedal);
            $fieldsUsed = true;
        }
        }
// dexterite arms soucis
/*        if (isset($searchCriteria['Dexterity_arms']) && !empty($searchCriteria['Dexterity_arms'])) {
            $usearms = (array)$searchCriteria['Dexterity_arms'];

            if (count($usearms) > 0) {
                $bikes->whereIn('Dexterity_arms', $usearms);
                $fieldsUsed = true;
            }
        }
*/
// type de freinage
        if (isset($searchCriteria['brakes']) && !empty($searchCriteria['brakes'])) {
            $brakes = (array)$searchCriteria['brakes'];

            if (count($brakes) > 0) {
                $bikes->whereIn('Brakes_type', $brakes);
                $fieldsUsed = true;
            }
        }
 // aquilibre


// hauteur de cadre



        // Exécutez la requête
        if ($fieldsUsed) {
            $results = $bikes->get();
        } else {
            $results = collect();
        }
        return view('results-bikes', ['results' => $results]);
    }
}
