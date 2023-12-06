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

        Prices::create([
            'adult' => 120,
            'children' => 60,
            'discount_id' => 2,
        ]);

        Prices::create([
            'adult' => 90,
            'children' => 45,
            'discount_id' => 3,
        ]);

        Prices::create([
            'adult' => 110,
            'children' => 55,
            'discount_id' => 4,
        ]);

        Prices::create([
            'adult' => 95,
            'children' => 48,
            'discount_id' => 5,
        ]);

        Prices::create([
            'adult' => 130,
            'children' => 65,
            'discount_id' => 6,
        ]);

        Prices::create([
            'adult' => 85,
            'children' => 42,
            'discount_id' => 7,
        ]);

        Prices::create([
            'adult' => 115,
            'children' => 57,
            'discount_id' => 8,
        ]);

        Prices::create([
            'adult' => 105,
            'children' => 52,
            'discount_id' => 9,
        ]);

        Prices::create([
            'adult' => 125,
            'children' => 62,
            'discount_id' => 10,
        ]);

        Prices::create([
            'adult' => 100,
            'children' => 50,
            'discount_id' => 11,
        ]);

        Prices::create([
            'adult' => 135,
            'children' => 67,
            'discount_id' => 12,
        ]);

        Prices::create([
            'adult' => 80,
            'children' => 40,
            'discount_id' => 13,
        ]);

        Prices::create([
            'adult' => 140,
            'children' => 70,
            'discount_id' => 14,
        ]);

        Prices::create([
            'adult' => 75,
            'children' => 37,
            'discount_id' => 15,
        ]);

    }
}
