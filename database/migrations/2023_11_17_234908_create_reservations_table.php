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

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_start');
            $table->timestamp('date_end');
            $table->timestamp('updated');
            $table->enum('status');
            $table->float('total');
            $table->bigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->bigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservations');
    }
};
