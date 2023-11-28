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
            'password' => bcrypt('secret'),
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Carlos',
            'lastname' => 'Duverney',
            'email' => 'duverney@test.com',
            'password' => bcrypt('secret'),
            'phone' => '1234567890',
        ]);

        Client::create([
            'name' => 'Eduardo',
            'lastname' => 'Murillo',
            'email' => 'murillo@test.com',
            'password' => bcrypt('secret'),
            'phone' => '1234567890',
        ]);
    }
}
