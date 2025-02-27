<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StokSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_stok')->insert([
                'barang_id' => $i,
                'jumlah' => $faker->numberBetween(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

