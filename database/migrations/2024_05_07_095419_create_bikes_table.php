<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bikes_table', function (Blueprint $table) {
            $table->id();
            $table->string('Bike_name', 50);
            $table->string('Description', 500);
            $table->string('Pros', 500);
            $table->string('Cons', 500);
            $table->integer('Weight');
            $table->boolean('Foldable')->default(false);
            $table->integer('Speeds_number');
            $table->string('Breaks_type', 250);
            $table->boolean('Electric_assistance')->default(false);
           // $table->string('Seat_type', 50);

            $table->boolean('Use_solo')->default(false);
            $table->boolean('Use_duo')->default(false);
            $table->boolean('Use_several')->default(false);

            $table->boolean('pedal_legs')->default(false);
            $table->boolean('pedal_arms')->default(false);
            $table->boolean('pedal_arms_legs')->default(false);
            $table->boolean('no_pedal')->default(false);
            $table->boolean('dexterity_good')->default(false);
            $table->boolean('dexterity_middel')->default(false);
            $table->boolean('no_dexterity')->default(false);
            $table->boolean('saddel_ok')->default(false);
            $table->boolean('seat_needed')->default(false);
            $table->boolean('Seat_needed_plus')->default(false);
            $table->boolean('Wheelchairr')->default(false);

            $table->string('Picture')->nullable(); // Assuming a path to the image will be stored
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes_table');
    }
};
