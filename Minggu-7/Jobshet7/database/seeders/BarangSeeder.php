<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        // Nonaktifkan Foreign Key Checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Hapus semua data dalam tabel (bisa menggunakan truncate atau delete)
        DB::table('m_barang')->truncate();

        // Aktifkan kembali Foreign Key Checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('m_barang')->insert([
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga_beli' => 7000000, 'harga_jual' => 8000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Televisi', 'harga_beli' => 2500000, 'harga_jual' => 2800000],
            ['barang_id' => 4, 'kategori_id' => 3, 'barang_kode' => 'BRG004', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 6, 'kategori_id' => 4, 'barang_kode' => 'BRG006', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3500, 'harga_jual' => 5000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Kaos', 'harga_beli' => 50000, 'harga_jual' => 60000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Jaket', 'harga_beli' => 150000, 'harga_jual' => 180000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Rice Cooker', 'harga_beli' => 300000, 'harga_jual' => 350000],
        ]);
    }
}
