<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Caminata',
        ]);
        Category::create([
            'name' => 'Paseo en moto',
        ]);
        Category::create([
            'name' => 'Paseo en carro',
        ]);
        Category::create([
            'name' => 'Paso en vehiculo maritimo',
        ]);
        Category::create([
            'name' => 'Paseo en bicicleta',
        ]);
    }
}
