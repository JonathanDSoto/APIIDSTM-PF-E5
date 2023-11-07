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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            // category
            $table->longText("description");
            $table->boolval("available");
            $table->tinyInteger("max");
            $table->tinyInteger("active");
            $table->tinyInteger("completed");
            /* $table->float("cost",10,3); */
            // product => null?
            $table->timestamps();
            $table->softDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};