<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('m_barang')->insert([
                'nama_barang' => 'Barang ' . $i,
                'harga' => $faker->numberBetween(5000, 100000),
                'stok' => 0,
                'kategori_id' => $faker->numberBetween(1, 5) // Sesuai kategori
            ]);
        }
    }
}

