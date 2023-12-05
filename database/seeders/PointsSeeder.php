<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('points')->insert([
            [
                'points_per_dollar' => 1,
                'points_is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);

        DB::table('points_multiplier')->insert([
            [
                'group_id' => 1,
                'points_id' => 1,
                'points_multiplier' => 1,
                'points_start_date' => Carbon::now(),
                'points_expiry_date' => Carbon::now()->addYear(1),
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);
    }
}
