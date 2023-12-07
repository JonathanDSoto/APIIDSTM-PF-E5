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
            'startDate' => '2023-12-01',
            'endDate' => '2023-12-03',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 2,
            'service_id' => 2,
            'startDate' => '2023-12-02',
            'endDate' => '2023-12-04',
            'adultTotal' => 2,
            'childTotal' => 1,
            'total' => 250,
        ]);

        Reservation::create([
            'client_id' => 3,
            'service_id' => 3,
            'startDate' => '2023-12-03',
            'endDate' => '2023-12-05',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 4,
            'service_id' => 4,
            'startDate' => '2023-12-04',
            'endDate' => '2023-12-06',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 5,
            'service_id' => 5,
            'startDate' => '2023-12-05',
            'endDate' => '2023-12-07',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 6,
            'service_id' => 6,
            'startDate' => '2023-12-06',
            'endDate' => '2023-12-08',
            'adultTotal' => 2,
            'childTotal' => 1,
            'total' => 250,
        ]);

        Reservation::create([
            'client_id' => 7,
            'service_id' => 7,
            'startDate' => '2023-12-07',
            'endDate' => '2023-12-09',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 8,
            'service_id' => 8,
            'startDate' => '2023-12-08',
            'endDate' => '2023-12-10',
            'adultTotal' => 2,
            'childTotal' => 2,
            'total' => 300,
        ]);

        Reservation::create([
            'client_id' => 9,
            'service_id' => 9,
            'startDate' => '2023-12-09',
            'endDate' => '2023-12-11',
            'adultTotal' => 2,
            'childTotal' => 1,
            'total' => 250,
        ]);

        Reservation::create([
            'client_id' => 10,
            'service_id' => 10,
            'startDate' => '2023-12-10',
            'endDate' => '2023-12-12',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 11,
            'service_id' => 11,
            'startDate' => '2023-12-11',
            'endDate' => '2023-12-13',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 12,
            'service_id' => 12,
            'startDate' => '2023-12-12',
            'endDate' => '2023-12-14',
            'adultTotal' => 2,
            'childTotal' => 1,
            'total' => 250,
        ]);

        Reservation::create([
            'client_id' => 13,
            'service_id' => 13,
            'startDate' => '2023-12-13',
            'endDate' => '2023-12-15',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 14,
            'service_id' => 14,
            'startDate' => '2023-12-14',
            'endDate' => '2023-12-16',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 15,
            'service_id' => 15,
            'startDate' => '2023-12-15',
            'endDate' => '2023-12-17',
            'adultTotal' => 2,
            'childTotal' => 2,
            'total' => 300,
        ]);

        Reservation::create([
            'client_id' => 1,
            'service_id' => 1,
            'startDate' => '2023-01-01',
            'endDate' => '2023-01-03',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 1,
            'service_id' => 2,
            'startDate' => '2022-12-15',
            'endDate' => '2022-12-17',
            'adultTotal' => 2,
            'childTotal' => 1,
            'total' => 250,
        ]);

        Reservation::create([
            'client_id' => 1,
            'service_id' => 3,
            'startDate' => '2022-11-01',
            'endDate' => '2022-11-03',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 1,
            'service_id' => 4,
            'startDate' => '2022-10-15',
            'endDate' => '2022-10-17',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

        Reservation::create([
            'client_id' => 1,
            'service_id' => 5,
            'startDate' => '2022-09-01',
            'endDate' => '2022-09-03',
            'adultTotal' => 2,
            'childTotal' => 0,
            'total' => 200,
        ]);

    }
}
