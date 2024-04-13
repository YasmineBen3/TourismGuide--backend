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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->enum('type', ['reservation', 'tour', 'car', 'restaurant']);
            $table->timestamps();

            $table->unsignedBigInteger('host_id');
            $table->foreign('host_id')->references('id')->on('hosts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
