<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $kategori = ['Elektronik', 'Fashion', 'Makanan', 'Alat Tulis', 'Mainan'];

        foreach ($kategori as $item) {
            DB::table('m_kategori')->insert([
                'nama_kategori' => $item
            ]);
        }
    }
}
