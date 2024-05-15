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
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('Bike_name', 70);
            $table->string('Description', 70);
            $table->string('Pros', 1000);
            $table->string('Cons', 1000);
            $table->integer('Weight');
            $table->boolean('Electrical_assistance')->default(false);
            $table->boolean('Foldable')->default(false);
            $table->integer('Speeds_number');
            $table->string('Brakes_type', 70);
            $table->string('Frame_height', 70);
            $table->string('Disability_type', 70);
            $table->string('Bike_use', 70);
            $table->string('Pedal_way', 70);
            $table->string('Dexterity_arms', 70);
            $table->string('Balance', 70);
            $table->string('Picture', 70)->nullable(); // Assuming a path to the image will be stored
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes');
    }
};
