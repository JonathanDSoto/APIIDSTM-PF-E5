<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Coupon::create([
            'code' => '2023ASF',
            'discount' => 10,
            'type' => 'adult',
            'status' => 'active',
        ]);
    }
}
