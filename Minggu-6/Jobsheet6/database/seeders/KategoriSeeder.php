<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->delete();

        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'KTG001', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 2, 'kategori_kode' => 'KTG002', 'kategori_nama' => 'Pakaian'],
            ['kategori_id' => 3, 'kategori_kode' => 'KTG003', 'kategori_nama' => 'Makanan'],
            ['kategori_id' => 4, 'kategori_kode' => 'KTG004', 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 5, 'kategori_kode' => 'KTG005', 'kategori_nama' => 'Alat Tulis'],
            ['kategori_id' => 6, 'kategori_kode' => 'KTG006', 'kategori_nama' => 'Buku Komik'],
            ['kategori_id' => 7, 'kategori_kode' => 'KTG007', 'kategori_nama' => 'Buku Novel'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
