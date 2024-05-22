<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    /**
     * Display a listing of the bikes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all();
        return view('touslesvelos', compact('bikes'));
    }

    /**
     * Show the form for creating a new bike.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bikes.create');
    }

    /**
     * Store a newly created bike in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // les règles de validation
            'bike_name' => 'required|string|max:70',
            'description' => 'required|string|max:1500',
            'pros' => 'required|string',
            'cons' => 'required|string',
            'weight' => 'required|numeric|min:0',
            'electrical_assistance' => 'required|boolean',
            'foldable' => 'required|boolean',
            'speeds_number' => 'required|integer|min:0',
            'brakes_type' => 'required|string|max:500',
            'frame_height' => 'required|numeric|min:0',
            'disability_type' => 'required|string|max:500',
            'bike_use' => 'required|string|max:500',
            'pedal_way' => 'required|string|max:500',
            'dexterity_arms' => 'required|string|max:500',
            'balance' => 'required|string|max:500',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('bikes', 'public');
            $request->merge(['picture' => $path]);
        }
        Bike::create($request->all());

        return redirect()->route('touslesvelos')
            ->with('success', 'Bike added successfully.');
    }

    /**
     * Display the specified bike.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        return view('modelevelo', compact('bike'));
    }

    /**
     * Show the form for editing the specified bike.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        return view('bikes.edit', compact('bike'));
    }

    /**
     * Update the specified bike in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        $request->validate([
            //les règles de validation
            'bike_name' => 'required|string|max:70',
            'description' => 'required|string|max:1500',
            'pros' => 'required|string',
            'cons' => 'required|string',
            'weight' => 'required|numeric|min:0',
            'electrical_assistance' => 'required|boolean',
            'foldable' => 'required|boolean',
            'speeds_number' => 'required|integer|min:0',
            'brakes_type' => 'required|string|max:500',
            'frame_height' => 'required|numeric|min:0',
            'disability_type' => 'required|string|max:500',
            'bike_use' => 'required|string|max:500',
            'pedal_way' => 'required|string|max:500',
            'dexterity_arms' => 'required|string|max:500',
            'balance' => 'required|string|max:500',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('bikes', 'public');
            $request->merge(['picture' => $path]);
        }
        $bike->update($request->all());

        return redirect()->route('touslesvelos')
            ->with('success', 'Bike updated successfully');
    }

    /**
     * Remove the specified bike from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        $bike->delete();

        return redirect()->route('touslesvelos')
            ->with('success', 'Bike deleted successfully');
    }
}
