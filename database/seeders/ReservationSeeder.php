<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Reservation::create([
            'client_id' => 1,
            'service_id' => 1,
            'startDate' => '2021-10-01',
            'endDate' => '2021-10-03',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 2,
            'service_id' => 2,
            'startDate' => '2021-10-02',
            'endDate' => '2021-10-04',
            'adultTotal' => 2,
            'childTotal' => 1,
            'total' => 250,
        ]);

        Reservation::create([
            'client_id' => 3,
            'service_id' => 3,
            'startDate' => '2021-10-03',
            'endDate' => '2021-10-05',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 4,
            'service_id' => 4,
            'startDate' => '2021-10-04',
            'endDate' => '2021-10-06',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 5,
            'service_id' => 5,
            'startDate' => '2021-10-05',
            'endDate' => '2021-10-07',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

    }
}
