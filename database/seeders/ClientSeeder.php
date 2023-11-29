<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Client::create([
            'name' => 'Angel',
            'lastname' => 'Almanza',
            'email' => 'almanza@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Carlos',
            'lastname' => 'Duverney',
            'email' => 'duverney@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Eduardo',
            'lastname' => 'Murillo',
            'email' => 'murillo@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Fernanda',
            'lastname' => 'Lopez',
            'email' => 'lopez@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Gabriel',
            'lastname' => 'Ramirez',
            'email' => 'ramirez@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Isabel',
            'lastname' => 'Gutierrez',
            'email' => 'gutierrez@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Hector',
            'lastname' => 'Diaz',
            'email' => 'diaz@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Karla',
            'lastname' => 'Martinez',
            'email' => 'martinez@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Luis',
            'lastname' => 'Vargas',
            'email' => 'vargas@test.com',
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Monica',
            'lastname' => 'Perez',
            'email' => 'perez@test.com',
            'phone' => '1234567890',
        ]);
    }
}
