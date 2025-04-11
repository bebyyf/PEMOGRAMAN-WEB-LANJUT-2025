<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $penjualanCount = 10; // 10 transaksi penjualan
        $barangIds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Barang dengan ID 1-10

        for ($i = 1; $i <= $penjualanCount; $i++) {
            // Ambil 3 barang secara acak untuk setiap transaksi penjualan
            $randomBarang = collect($barangIds)->shuffle()->take(3);

            foreach ($randomBarang as $barangId) {
                $hargaBarang = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual');

                $data[] = [
                    'penjualan_id'  => $i,
                    'barang_id'     => $barangId,
                    'jumlah'        => rand(1, 5), // Jumlah barang antara 1-5
                    'harga'         => $hargaBarang,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ];
            }
        }

        // Insert data ke tabel t_penjualan_detail
        DB::table('t_penjualan_detail')->insert($data);
    }
}
