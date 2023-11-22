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

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->bigInteger('associatedProduct')->nullable();
            $table->boolean('isAvailable');
            $table->float('price');
            $table->float('rating');
            $table->bigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
