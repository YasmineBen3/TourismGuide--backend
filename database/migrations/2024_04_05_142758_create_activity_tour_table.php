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
        Schema::create('activity_tour', function (Blueprint $table) {
            $table->id();
            $table->integer('step');
            $table->timestamps();

            $table->unsignedBigInteger('activty_id');
            $table->foreign('activity_id')->references('id')->on('activities');

            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_tour');
    }
};
