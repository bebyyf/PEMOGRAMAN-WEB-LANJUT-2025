<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_stok')->insert([
            [
                'barang_id'  => 1, // Laptop ASUS ROG
                'jumlah'     => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 2, // Samsung Galaxy S23
                'jumlah'     => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 3, // Jaket Hoodie Pria
                'jumlah'     => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 4, // Sneakers Nike Air
                'jumlah'     => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 5, // Kopi Bubuk Arabika
                'jumlah'     => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 6, // Mie Instan Goreng
                'jumlah'     => 100,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 7, // Sabun Cuci Piring 1L
                'jumlah'     => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 8, // Sapu Lantai Kayu
                'jumlah'     => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 9, // Sepeda Gunung Polygon
                'jumlah'     => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id'  => 10, // Matras Yoga Anti Slip
                'jumlah'     => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}