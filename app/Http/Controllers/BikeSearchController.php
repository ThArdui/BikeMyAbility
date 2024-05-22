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
                $bikes = $bikes->where('Disability_type', 'LIKE', '%' . $disabilityType . '%');
                $fieldsUsed = true;
           }
        }
// assistance electrique ok
        if (isset($searchCriteria['electrical_assistance']) && !empty($searchCriteria['electrical_assistance'])) {
            $electricalAssistance = $searchCriteria['electrical_assistance'];

            if ($electricalAssistance === 'oui_assistance_electric') {
                $bikes = $bikes->where('Electrical_assistance', 1);
                $fieldsUsed = true;
            } elseif ($electricalAssistance === 'non_assistance_electric') {
                $bikes = $bikes->where('Electrical_assistance', 0);
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
            $bikes = $bikes->whereIn('Pedal_way',$pedal);
            $fieldsUsed = true;
        }
        }
// type de freinage ok
        if (isset($searchCriteria['brakes']) && !empty($searchCriteria['brakes']) && $searchCriteria['brakes']!=="anyway_brakes") {
            if($searchCriteria['brakes']==='drum_brake'){
                $bikes = $bikes->where('Brakes_type','Freins à tambours');
            }
            if($searchCriteria['brakes']==='coaster_brakes'){
                $bikes = $bikes->where('Brakes_type','Freins hydrauliques');
            }
            if($searchCriteria['brakes']==='disc_brakes'){
               $bikes = $bikes->where('Brakes_type','Freins à disques');
            }
            $fieldsUsed = true;
        }
// hauteur de cadre ok
if (isset($searchCriteria['frame_height']) && $searchCriteria['frame_height']!=="frame_anyway") {
    if($searchCriteria['frame_height']==='frame_hight') {
        $bikes = $bikes->where('Frame_height','cadre haut');
    }
    if($searchCriteria['frame_height']=== 'frame_low'){
        $bikes = $bikes->where('Frame_height','cadre bas');
    }
    $fieldsUsed = true;
}

        // Exécutez la requête
        if ($fieldsUsed) {
            $results = $bikes->get();
        } else {
            $results = collect();
        }
        return view('results-bikes', ['results' => $results]);
    }
}
//test Carmen
