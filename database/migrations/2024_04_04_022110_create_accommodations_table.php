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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('accommodation_name');
            $table->string('accommodation_description');
            $table->integer('nbr_places');
            $table->string('price_day');

            $table->unsignedBigInteger('accommodation_type_id');
            $table->foreign('accommodation_type_id')->references('id')->on('accommodations');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');
    }
};
