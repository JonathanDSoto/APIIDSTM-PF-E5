<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Discount::create([
            'name' => 'MAYO 2023',
            'type' => 'adult',
            'discount' => 10,
        ]);

        Discount::create([
            'name' => 'JUNIO 2023',
            'type' => 'adult',
            'discount' => 12,
        ]);

        Discount::create([
            'name' => 'JULIO 2023',
            'type' => 'adult',
            'discount' => 15,
        ]);

        Discount::create([
            'name' => 'AGOSTO 2023',
            'type' => 'adult',
            'discount' => 8,
        ]);

        Discount::create([
            'name' => 'SEPTIEMBRE 2023',
            'type' => 'adult',
            'discount' => 20,
        ]);

        Discount::create([
            'name' => 'OCTUBRE 2023',
            'type' => 'adult',
            'discount' => 18,
        ]);

        Discount::create([
            'name' => 'NOVIEMBRE 2023',
            'type' => 'adult',
            'discount' => 25,
        ]);

        Discount::create([
            'name' => 'DICIEMBRE 2023',
            'type' => 'adult',
            'discount' => 30,
        ]);

        Discount::create([
            'name' => 'ENERO 2024',
            'type' => 'adult',
            'discount' => 22,
        ]);

        Discount::create([
            'name' => 'FEBRERO 2024',
            'type' => 'adult',
            'discount' => 28,
        ]);

        Discount::create([
            'name' => 'MARZO 2024',
            'type' => 'adult',
            'discount' => 5,
        ]);

        Discount::create([
            'name' => 'ABRIL 2024',
            'type' => 'adult',
            'discount' => 15,
        ]);

        Discount::create([
            'name' => 'MAYO 2024',
            'type' => 'adult',
            'discount' => 12,
        ]);

        Discount::create([
            'name' => 'JUNIO 2024',
            'type' => 'adult',
            'discount' => 10,
        ]);

        Discount::create([
            'name' => 'JULIO 2024',
            'type' => 'adult',
            'discount' => 8,
        ]);
    }
}
