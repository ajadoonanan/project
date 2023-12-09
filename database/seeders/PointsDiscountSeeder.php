<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PointsDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('points_discounts')->insert([
            [
                'points_needed' => 100,
                'points_discount_percent' => 10,
                'stripe_discount_id' => 'Mbj3gx5m',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'points_needed' => 20,
                'points_discount_percent' => 20,
                'stripe_discount_id' => 'tZmnlInb',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);
    }
}
