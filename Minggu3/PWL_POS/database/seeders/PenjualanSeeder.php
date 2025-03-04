<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            [
                'tanggal' => '2024-02-27',
                'customer' => 'Bebi Findia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-02-28',
                'customer' => 'Lovelyta',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-01',
                'customer' => 'Syifa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-02',
                'customer' => 'Dhynar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-03',
                'customer' => 'Danica',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-04',
                'customer' => 'Aqueena',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-05',
                'customer' => 'Maysa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-06',
                'customer' => 'Maharani',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-07',
                'customer' => 'Dinda',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal' => '2024-03-08',
                'customer' => 'Dini',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
