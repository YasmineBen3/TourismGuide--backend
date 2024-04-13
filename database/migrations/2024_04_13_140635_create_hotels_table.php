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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('description');
            $table->integer('nbr_stars');
            $table->enum('type',['appartement',]);
            $table->decimal('latitude', 10, 7); 
            $table->decimal('longitude', 10, 7);

            $table->check('nbr_stars >= 1 and nbr_stars <= 5');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
