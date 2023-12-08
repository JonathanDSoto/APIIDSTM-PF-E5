<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('-1 years', 'now');
        $endDate = $this->faker->dateTimeBetween($startDate, '+2 weeks');

        return [
            'client_id' => Client::all()->random()->id,
            'service_id' => Service::all()->random()->id,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'adultTotal' => $this->faker->numberBetween(1, 5),
            'childTotal' => $this->faker->numberBetween(0, 3),
            'total' => $this->faker->randomFloat(2, 50, 500),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
