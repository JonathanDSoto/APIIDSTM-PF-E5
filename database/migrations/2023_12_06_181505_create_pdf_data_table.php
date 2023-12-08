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
        Schema::create('pdf_data', function (Blueprint $table) {
            $table->id();
            $table->string('clientName');
            $table->string('clientLastname')->nullable();
            $table->string('clientEmail');
            $table->string('clientPhone');
            $table->string('clientPhone2')->nullable();
            $table->string('serviceName');
            $table->string('serviceDescription');
            $table->string('servicePrice');
            $table->string('serviceCategory');
            $table->string('serviceImage')->nullable();
            $table->string('reservationStartDate');
            $table->string('reservationEndDate');
            $table->string('reservationAdultTotal');
            $table->string('reservationChildTotal');
            $table->string('reservationTotal');
            $table->string('reservationId');
            $table->string('reservationCreatedAt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdf_data');
    }
};
