<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            [
                'kategori_kode' => 'ELK001',
                'kategori_nama' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'PMS002',
                'kategori_nama' => 'Pakaian & Mode',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'MKN003',
                'kategori_nama' => 'Makanan & Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'KBT004',
                'kategori_nama' => 'Kebutuhan Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'SPT005',
                'kategori_nama' => 'Sport & Outdoor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
