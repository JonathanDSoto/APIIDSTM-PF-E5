<?php

namespace Database\Seeders;

use App\Models\Schedual;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schedual::create([
            'day' => 'Monday',
            'start' => '08:00:00',
            'end' => '17:00:00',
        ]);

        Schedual::create([
            'day' => 'Friday',
            'start' => '08:00:00',
            'end' => '17:00:00',
        ]);
    }
}
