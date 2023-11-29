<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Http\Request;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $response = Http::get('https://placehold.co/600x400/000000/FFFFFF/png');

        if ($response->ok()) {
            $contents = $response->body();
            $filename = 'images/placeholder.png';
            Storage::put($filename, $contents);
            $imageUrl = Storage::url($filename);
        }

        Category::create([
            'name' => 'Senderismo',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Tour en Cuatrimoto',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Ruta Escénica en Coche',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Excursión en Barco',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Ciclismo de Montaña',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Exploración de Cuevas',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Tour en Segway',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Paseo a Caballo',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Visita a Viñedos',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Recorrido en Globo Aerostático',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Pesca Deportiva',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Clases de Surf',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Turismo Fotográfico',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Visita a Parques Nacionales',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Observación de Estrellas',
            'image_url' => $imageUrl ?? null
        ]);

        Category::create([
            'name' => 'Tour de Arte Urbano',
            'image_url' => $imageUrl ?? null
        ]);
    }
}
