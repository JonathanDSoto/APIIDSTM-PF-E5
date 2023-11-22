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
            $table->timestamp('date_end')->nullable();
            $table->timestamp('updated')->nullable();
            $table->enum('status', ['pending','accepted','rejected', 'onService', 'completed'])->default('pending');
            $table->float('total');

            $table->foreignId('client_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('service_id')->constrained();
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
