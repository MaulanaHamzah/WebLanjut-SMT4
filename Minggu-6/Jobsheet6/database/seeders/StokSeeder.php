<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'barang_id'   => 1,
                'user_id'     => 1,
                'stok_tanggal'=> Carbon::now()->subDays(10),
                'stok_jumlah' => 50,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 2,
                'user_id'     => 2,
                'stok_tanggal'=> Carbon::now()->subDays(8),
                'stok_jumlah' => 30,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 3,
                'user_id'     => 1,
                'stok_tanggal'=> Carbon::now()->subDays(7),
                'stok_jumlah' => 40,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 4,
                'user_id'     => 3,
                'stok_tanggal'=> Carbon::now()->subDays(6),
                'stok_jumlah' => 25,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 5,
                'user_id'     => 2,
                'stok_tanggal'=> Carbon::now()->subDays(5),
                'stok_jumlah' => 60,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 6,
                'user_id'     => 1,
                'stok_tanggal'=> Carbon::now()->subDays(4),
                'stok_jumlah' => 35,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 7,
                'user_id'     => 3,
                'stok_tanggal'=> Carbon::now()->subDays(3),
                'stok_jumlah' => 20,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 8,
                'user_id'     => 2,
                'stok_tanggal'=> Carbon::now()->subDays(2),
                'stok_jumlah' => 45,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 9,
                'user_id'     => 1,
                'stok_tanggal'=> Carbon::now()->subDay(),
                'stok_jumlah' => 55,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'barang_id'   => 10,
                'user_id'     => 3,
                'stok_tanggal'=> Carbon::now(),
                'stok_jumlah' => 50,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}
