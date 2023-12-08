<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Observación de Aves',
            'resume' => 'Excursión para observar aves en su hábitat natural',
            'available_days' => 'Martes, Jueves, Sábado, Domingo',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 25.99,
            'childPrice' => 15.99,
        ]);

        Service::create([
            'name' => 'Recorrido Histórico',
            'resume' => 'Descubre la historia de la ciudad con un recorrido guiado',
            'available_days' => 'Lunes, Miércoles, Viernes, Sábado',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 20.99,
            'childPrice' => 12.99,
        ]);

        Service::create([
            'name' => 'Clases de Yoga',
            'resume' => 'Practica yoga al aire libre con un instructor experimentado',
            'available_days' => 'Lunes, Miércoles, Viernes',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 15.99,
            'childPrice' => 9.99,
        ]);

        Service::create([
            'name' => 'Ruta en Bicicleta',
            'resume' => 'Explora rutas panorámicas en bicicleta por la naturaleza circundante',
            'available_days' => 'Martes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 2,
            'adultPrice' => 18.99,
            'childPrice' => 11.99,
        ]);

        Service::create([
            'name' => 'Tour Gastronómico',
            'resume' => 'Descubre la deliciosa gastronomía local con este tour culinario',
            'available_days' => 'Miércoles, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 7,
            'adultPrice' => 30.99,
            'childPrice' => 20.99,
        ]);

        Service::create([
            'name' => 'Escalada en Roca',
            'resume' => 'Experimenta la emoción de la escalada en las impresionantes montañas locales',
            'available_days' => 'Lunes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 1,
            'adultPrice' => 22.99,
            'childPrice' => 15.99,
        ]);

        Service::create([
            'name' => 'Paseo en Barco',
            'resume' => 'Disfruta de un relajante paseo en barco por el lago al atardecer',
            'available_days' => 'Martes, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 2,
            'adultPrice' => 35.99,
            'childPrice' => 25.99,
        ]);

        Service::create([
            'name' => 'Curso de Fotografía',
            'resume' => 'Aprende técnicas de fotografía mientras exploras paisajes impresionantes',
            'available_days' => 'Miércoles, Sábado',
            'is_active' => true,
            'category_id' => 2,
            'adultPrice' => 28.99,
            'childPrice' => 18.99,
        ]);

        Service::create([
            'name' => 'Recorrido en Helicóptero',
            'resume' => 'Experimenta vistas aéreas espectaculares con un emocionante recorrido en helicóptero',
            'available_days' => 'Jueves, Sábado, Domingo',
            'is_active' => true,
            'category_id' => 3,
            'adultPrice' => 50.99,
            'childPrice' => 40.99,
        ]);

        Service::create([
            'name' => 'Senderismo Nocturno',
            'resume' => 'Explora senderos bajo la luz de la luna y las estrellas',
            'available_days' => 'Martes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 5,
            'adultPrice' => 24.99,
            'childPrice' => 14.99,
        ]);

        Service::create([
            'name' => 'Tour en Segway',
            'resume' => 'Descubre la ciudad de manera divertida con un tour en segway',
            'available_days' => 'Lunes, Miércoles, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 9,
            'adultPrice' => 26.99,
            'childPrice' => 16.99,
        ]);

        Service::create([
            'name' => 'Pesca Deportiva en el Mar',
            'resume' => 'Disfruta de una emocionante jornada de pesca en aguas profundas',
            'available_days' => 'Jueves, Sábado, Domingo',
            'is_active' => true,
            'category_id' => 9,
            'adultPrice' => 38.99,
            'childPrice' => 28.99,
        ]);

        Service::create([
            'name' => 'Visita a Parques Temáticos',
            'resume' => 'Vive la magia de los parques temáticos locales con un tour especial',
            'available_days' => 'Miércoles, Viernes, Sábado',
            'is_active' => true,
            'category_id' => 10,
            'adultPrice' => 32.99,
            'childPrice' => 22.99,
        ]);

        Service::create([
            'name' => 'Exploración Subacuática',
            'resume' => 'Sumérgete en las aguas locales para explorar la vida marina',
            'available_days' => 'Martes, Jueves, Domingo',
            'is_active' => true,
            'category_id' => 11,
            'adultPrice' => 45.99,
            'childPrice' => 35.99,
        ]);

        Service::create([
            'name' => 'Recorrido en Globo Aerostático al Amanecer',
            'resume' => 'Vuela en globo y disfruta del amanecer desde las alturas',
            'available_days' => 'Lunes, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 15,
            'adultPrice' => 48.99,
            'childPrice' => 38.99,
        ]);

        Service::create([
            'name' => 'Tour de Arte Urbano',
            'resume' => 'Descubre el arte callejero de la ciudad con un recorrido único',
            'available_days' => 'Martes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 15,
            'adultPrice' => 30.99,
            'childPrice' => 20.99,
        ]);

        Service::create([
            'name' => 'Paseo a Caballo al Atardecer',
            'resume' => 'Cabalgata tranquila disfrutando de la puesta de sol',
            'available_days' => 'Lunes, Miércoles, Sábado',
            'is_active' => true,
            'category_id' => 12,
            'adultPrice' => 33.99,
            'childPrice' => 23.99,
        ]);

        Service::create([
            'name' => 'Visita a Viñedos con Degustación',
            'resume' => 'Explora los viñedos locales y disfruta de degustaciones exclusivas',
            'available_days' => 'Miércoles, Viernes, Domingo',
            'is_active' => true,
            'category_id' => 13,
            'adultPrice' => 42.99,
            'childPrice' => 32.99,
        ]);

        Service::create([
            'name' => 'Tour de Aventura en Cuatrimoto',
            'resume' => 'Siente la emoción de la aventura con un recorrido en cuatrimoto',
            'available_days' => 'Martes, Jueves, Sábado',
            'is_active' => true,
            'category_id' => 13,
            'adultPrice' => 40.99,
            'childPrice' => 30.99,
        ]);

        Service::create([
            'name' => 'Ciclismo de Montaña Extremo',
            'resume' => 'Desafía tus límites con un recorrido de ciclismo de montaña extremo',
            'available_days' => 'Lunes, Miércoles, Sábado',
            'is_active' => true,
            'category_id' => 13,
            'adultPrice' => 55.99,
            'childPrice' => 45.99,
        ]);

        Service::create([
            'name' => 'Excursión a Islas Desiertas',
            'resume' => 'Exploración de islas deshabitadas con playas paradisíacas',
            'available_days' => 'Martes, Jueves, Domingo',
            'is_active' => true,
            'category_id' => 14,
            'adultPrice' => 52.99,
            'childPrice' => 42.99,
        ]);

        Service::create([
            'name' => 'Clases de Surf en Olas Grandes',
            'resume' => 'Aprende a surfear en las impresionantes olas del océano',
            'available_days' => 'Miércoles, Viernes, Sábado',
            'is_active' => true,
            'category_id' => 15,
            'adultPrice' => 60.99,
            'childPrice' => 50.99,
        ]);
    }
}
