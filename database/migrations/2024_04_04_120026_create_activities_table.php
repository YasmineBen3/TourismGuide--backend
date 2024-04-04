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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->string('activity_description');
            $table->timestamps();

            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours');

            $table->unsignedBigInteger('steps_id');
            $table->foreign('steps_id')->references('id')->on('steps');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
