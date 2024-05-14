<?php

namespace App\Models\old;
use Illuminate\Database\Eloquent\Model;

class BikeSearch extends model
{  protected $table = 'bikes_table';
    protected $fillable = [
        'Bike_name',
        'Description',
        'Pros',
        'Cons',
        'Weight',
        'Foldable',
        'Electric_assistance',
        'physique',
        'auditif',
        'visuel',
        'cognitif',
        'mental',
        'asselectrique',
        'solo',
        'duo',
        'several',
        'pedal_legs',
        'pedal_arms',
        'pedal_arms_legs',
        'no_pedal',
        'dexterity_good',
        'dexterity_average',
        'dexterity_difficult',
        'drum_brake',
        'disc_brakes',
        'coaster_brakes',
        'anyway_brakes',
        'good_balance',
        'seat_needed',
        'seat_with_positioning_elements',
        'wheelchair_preference',
        'frame_hight',
        'frame_low',
        'frame_anyway',
        'Picture',
    ];
}
