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
        Schema::disableForeignKeyConstraints();

        Schema::create('service_status', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->tinyInteger('maxService');
            $table->tinyInteger('activeService');
            $table->tinyInteger('completedServices');
            $table->bigInteger('scheduals_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_status');
    }
};
