<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prices;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Prices::create([
            'adult' => 100,
            'children' => 50,
            'discount_id' => 1,
        ]);
    }
}
