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
            $table->string('name', 70);
            $table->string('description', 70);
            $table->string('pros', 1000);
            $table->string('cons', 1000);
            $table->integer('weight');
            $table->boolean('electrical_assistance')->default(false);
            $table->boolean('foldable')->default(false);
            $table->integer('speeds_number');
            $table->string('brakes_type', 70);
            $table->string('frame_height', 70);
            $table->string('disability_type', 70);
            $table->string('bike_use', 70);
            $table->string('pedal_way', 70);
            $table->string('dexterity_arms', 70);
            $table->string('balance', 70);
            $table->string('picture', 70)->nullable(); // Assuming a path to the image will be stored
            $table->foreignId('brake_type_id')->constrained();
            $table->foreignId('disability_type_id')->constrained();
            $table->foreignId('pedal_way_id')->constrained();
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
