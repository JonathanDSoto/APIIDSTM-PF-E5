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
            $table->foreignId('service_id')->constrained();
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
