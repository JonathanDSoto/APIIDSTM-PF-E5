<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Services::create([
            'name' => 'Caminata',
            'resume' => 'Caminata por el bosque',
            'duration' => '2 horas',
            'category_id' => 1,
            'prices_id' => 1,
        ]);
    }
}
