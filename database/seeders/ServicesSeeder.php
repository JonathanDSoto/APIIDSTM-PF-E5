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
            'available_days' => 'Lunes, Martes, Miercoles, Jueves, Viernes, Sabado, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'prices_id' => 1,
        ]);

        Services::create([
            'name' => 'Ski acuatico',
            'resume' => 'Ski acuatico en el lago',
            'available_days' => 'Lunes, Martes, Miercoles, Jueves, Viernes, Sabado, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'prices_id' => 2,
        ]);

        Services::create([
            'name' => 'Paseo de Camellos',
            'resume' => 'Paseo de Camellos por el desierto',
            'available_days' => 'Lunes, Martes, Miercoles, Jueves, Viernes, Sabado, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'prices_id' => 3,
        ]);
    }
}
