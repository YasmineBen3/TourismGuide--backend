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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['PayPal', 'Apple Pay', 'MasterCard', 'Google Pay', 'Visa Card']);
            $table->timestamps();

            $table->unsignedBigInteger('facture_id');
            $table->foreign('facture_id')->references('id')->on('factures');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
