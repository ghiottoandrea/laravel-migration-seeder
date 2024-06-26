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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Company');
            $table->string('Departure_station');
            $table->string('Arrival_station');
            $table->time('Departure_time');
            $table->time('Arrival_tIme');
            $table->string('Train_code');
            $table->tinyInteger('Carriagers');
            $table->boolean('In_time')->nullable();
            $table->boolean('Deleted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
