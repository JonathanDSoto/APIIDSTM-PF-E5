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

        Schema::create('services_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('products');
            $table->bigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('services');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_products');
    }
};
