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
        Services::create([
            'name' => 'Observación de Aves',
            'resume' => 'Excursión para observar aves en su hábitat natural',
            'available_days' => 'Martes, Jueves, Sábado, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 25.99,
            'childPrice' => 15.99,
        ]);

        Services::create([
            'name' => 'Recorrido Histórico',
            'resume' => 'Descubre la historia de la ciudad con un recorrido guiado',
            'available_days' => 'Lunes, Miércoles, Viernes, Sábado',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 20.99,
            'childPrice' => 12.99,
        ]);

        Services::create([
            'name' => 'Clases de Yoga',
            'resume' => 'Practica yoga al aire libre con un instructor experimentado',
            'available_days' => 'Lunes, Miércoles, Viernes',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 15.99,
            'childPrice' => 9.99,
        ]);

        Services::create([
            'name' => 'Ruta en Bicicleta',
            'resume' => 'Explora rutas panorámicas en bicicleta por la naturaleza circundante',
            'available_days' => 'Martes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 18.99,
            'childPrice' => 11.99,
        ]);

        Services::create([
            'name' => 'Tour Gastronómico',
            'resume' => 'Descubre la deliciosa gastronomía local con este tour culinario',
            'available_days' => 'Miércoles, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 30.99,
            'childPrice' => 20.99,
        ]);

        Services::create([
            'name' => 'Escalada en Roca',
            'resume' => 'Experimenta la emoción de la escalada en las impresionantes montañas locales',
            'available_days' => 'Lunes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 22.99,
            'childPrice' => 15.99,
        ]);

        Services::create([
            'name' => 'Paseo en Barco',
            'resume' => 'Disfruta de un relajante paseo en barco por el lago al atardecer',
            'available_days' => 'Martes, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 35.99,
            'childPrice' => 25.99,
        ]);

        Services::create([
            'name' => 'Curso de Fotografía',
            'resume' => 'Aprende técnicas de fotografía mientras exploras paisajes impresionantes',
            'available_days' => 'Miércoles, Sábado',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 28.99,
            'childPrice' => 18.99,
        ]);

        Services::create([
            'name' => 'Recorrido en Helicóptero',
            'resume' => 'Experimenta vistas aéreas espectaculares con un emocionante recorrido en helicóptero',
            'available_days' => 'Jueves, Sábado, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 50.99,
            'childPrice' => 40.99,
        ]);
    }
}
