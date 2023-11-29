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
            'name' => 'Senderismo',
        ]);

        Category::create([
            'name' => 'Tour en Cuatrimoto',
        ]);

        Category::create([
            'name' => 'Ruta Escénica en Coche',
        ]);

        Category::create([
            'name' => 'Excursión en Barco',
        ]);

        Category::create([
            'name' => 'Ciclismo de Montaña',
        ]);

        Category::create([
            'name' => 'Exploración de Cuevas',
        ]);

        Category::create([
            'name' => 'Tour en Segway',
        ]);

        Category::create([
            'name' => 'Paseo a Caballo',
        ]);

        Category::create([
            'name' => 'Visita a Viñedos',
        ]);

        Category::create([
            'name' => 'Recorrido en Globo Aerostático',
        ]);

        Category::create([
            'name' => 'Pesca Deportiva',
        ]);

        Category::create([
            'name' => 'Clases de Surf',
        ]);

        Category::create([
            'name' => 'Turismo Fotográfico',
        ]);

        Category::create([
            'name' => 'Visita a Parques Nacionales',
        ]);

        Category::create([
            'name' => 'Observación de Estrellas',
        ]);

        Category::create([
            'name' => 'Tour de Arte Urbano',
        ]);

        Category::create([
            'name' => 'Parapente',
        ]);

        Category::create([
            'name' => 'Tour de Compras',
        ]);

        Category::create([
            'name' => 'Excursión de Avistamiento de Ballenas',
        ]);

        Category::create([
            'name' => 'Descenso de Aguas Bravas',
        ]);

        Category::create([
            'name' => 'Recorrido Histórico a Pie',
        ]);

        Category::create([
            'name' => 'Exploración de Ruinas Antiguas',
        ]);

        Category::create([
            'name' => 'Tour de Aventuras',
        ]);

        Category::create([
            'name' => 'Visita a Reservas Naturales',
        ]);

        Category::create([
            'name' => 'Tour de Sabores Locales',
        ]);

        Category::create([
            'name' => 'Caminata Nocturna',
        ]);

        Category::create([
            'name' => 'Experiencia de Observación de Aves',
        ]);

        Category::create([
            'name' => 'Recorrido en Kayak',
        ]);

        Category::create([
            'name' => 'Tour de Arquitectura Histórica',
        ]);

        Category::create([
            'name' => 'Paseo en Lancha Rápida',
        ]);

    }
}
