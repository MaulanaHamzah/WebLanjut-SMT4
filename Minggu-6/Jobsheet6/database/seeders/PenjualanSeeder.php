<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'user_id'            => 1,
                'pembeli'            => 'Andi',
                'penjualan_kode'     => 'PJ-1001',
                'penjualan_tanggal'  => Carbon::now()->subDays(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 2,
                'pembeli'            => 'Budi',
                'penjualan_kode'     => 'PJ-1002',
                'penjualan_tanggal'  => Carbon::now()->subDays(9),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 1,
                'pembeli'            => 'Citra',
                'penjualan_kode'     => 'PJ-1003',
                'penjualan_tanggal'  => Carbon::now()->subDays(8),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 3,
                'pembeli'            => 'Dian',
                'penjualan_kode'     => 'PJ-1004',
                'penjualan_tanggal'  => Carbon::now()->subDays(7),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 2,
                'pembeli'            => 'Eko',
                'penjualan_kode'     => 'PJ-1005',
                'penjualan_tanggal'  => Carbon::now()->subDays(6),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 1,
                'pembeli'            => 'Fajar',
                'penjualan_kode'     => 'PJ-1006',
                'penjualan_tanggal'  => Carbon::now()->subDays(5),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 3,
                'pembeli'            => 'Gina',
                'penjualan_kode'     => 'PJ-1007',
                'penjualan_tanggal'  => Carbon::now()->subDays(4),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 2,
                'pembeli'            => 'Hadi',
                'penjualan_kode'     => 'PJ-1008',
                'penjualan_tanggal'  => Carbon::now()->subDays(3),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 1,
                'pembeli'            => 'Indra',
                'penjualan_kode'     => 'PJ-1009',
                'penjualan_tanggal'  => Carbon::now()->subDays(2),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 3,
                'pembeli'            => 'Joko',
                'penjualan_kode'     => 'PJ-1010',
                'penjualan_tanggal'  => Carbon::now()->subDay(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
