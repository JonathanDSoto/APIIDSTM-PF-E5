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

        Schema::create('images_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->bigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_services');
    }
};
