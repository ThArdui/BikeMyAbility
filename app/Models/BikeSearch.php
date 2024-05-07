<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BikeSearch extends model
{  protected $table = 'bikes_table';
    protected $fillable = [
        'Bike_name',
        'Picture',
        'Description',
        'Pros',
        'Cons',
        'Weight',
        'Foldable',
        'Speeds_number',
        'Breaks_type',
        'Electric_assistance',
        'Use_solo',
        'Use_duo',
        'Use_several',
        'pedal_legs',
        'pedal_arms',
        'pedal_arms_legs',
        'no_pedal',
        'dexterity_good',
        'dexterity_middel',
        'no_dexterity',
        'saddel_ok',
        'seat_needed',
        'Seat_needed_plus',
        'Wheelchairr',
    ];
}
