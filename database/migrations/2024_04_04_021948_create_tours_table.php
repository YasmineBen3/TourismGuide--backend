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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name');
            $table->string('tour_description');
            $table->date('tour_date');
            $table->decimal('tour_price');
            //npt = number of people per tour
            $table->number('npt');
            $table->timestamps();

            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
