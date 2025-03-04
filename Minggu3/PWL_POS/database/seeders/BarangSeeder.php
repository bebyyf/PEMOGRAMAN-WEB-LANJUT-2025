<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            // Elektronik
            [
                'kategori_id'  => 1, // Elektronik
                'barang_kode'  => 'BRG001',
                'barang_nama'  => 'Laptop ASUS ROG',
                'harga_beli'   => 15000000,
                'harga_jual'   => 18000000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'kategori_id'  => 1,
                'barang_kode'  => 'BRG002',
                'barang_nama'  => 'Samsung Galaxy S23',
                'harga_beli'   => 12000000,
                'harga_jual'   => 14000000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            
            // Pakaian & Mode
            [
                'kategori_id'  => 2, // Pakaian & Mode
                'barang_kode'  => 'BRG003',
                'barang_nama'  => 'Jaket Hoodie Pria',
                'harga_beli'   => 150000,
                'harga_jual'   => 200000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'kategori_id'  => 2,
                'barang_kode'  => 'BRG004',
                'barang_nama'  => 'Sneakers Nike Air',
                'harga_beli'   => 1200000,
                'harga_jual'   => 1500000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],

            // Makanan & Minuman
            [
                'kategori_id'  => 3, // Makanan & Minuman
                'barang_kode'  => 'BRG005',
                'barang_nama'  => 'Kopi Bubuk Arabika',
                'harga_beli'   => 50000,
                'harga_jual'   => 75000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'kategori_id'  => 3,
                'barang_kode'  => 'BRG006',
                'barang_nama'  => 'Mie Instan Goreng',
                'harga_beli'   => 2500,
                'harga_jual'   => 3500,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],

            // Kebutuhan Rumah Tangga
            [
                'kategori_id'  => 4, // Kebutuhan Rumah Tangga
                'barang_kode'  => 'BRG007',
                'barang_nama'  => 'Sabun Cuci Piring 1L',
                'harga_beli'   => 15000,
                'harga_jual'   => 20000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'kategori_id'  => 4,
                'barang_kode'  => 'BRG008',
                'barang_nama'  => 'Sapu Lantai Kayu',
                'harga_beli'   => 25000,
                'harga_jual'   => 35000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],

            // Sport & Outdoor
            [
                'kategori_id'  => 5, // Sport & Outdoor
                'barang_kode'  => 'BRG009',
                'barang_nama'  => 'Sepeda Gunung Polygon',
                'harga_beli'   => 3500000,
                'harga_jual'   => 4000000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            [
                'kategori_id'  => 5,
                'barang_kode'  => 'BRG010',
                'barang_nama'  => 'Matras Yoga Anti Slip',
                'harga_beli'   => 100000,
                'harga_jual'   => 150000,
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
        ]);
    }
}
