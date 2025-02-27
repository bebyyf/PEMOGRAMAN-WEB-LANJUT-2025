<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) { // 10 transaksi
            $barangIds = range(1, 10);
            shuffle($barangIds);

            for ($j = 0; $j < 3; $j++) { // 3 barang per transaksi
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $i,
                    'barang_id' => $barangIds[$j],
                    'qty' => $faker->numberBetween(1, 5),
                    'subtotal' => $faker->numberBetween(5000, 50000),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

