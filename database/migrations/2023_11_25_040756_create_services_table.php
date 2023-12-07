<?php

use App\Models\Prices;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('resume');
            $table->boolean('is_active')->default(true);
            $table->string('available_days');
            $table->foreignIdFor(Category::class)->constrained();
            $table->float('adultPrice', 8, 2)->default(0);
            $table->float('childPrice', 8, 2)->default(0);
            $table->timestamps();
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
