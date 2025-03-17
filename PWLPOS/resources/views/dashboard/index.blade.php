@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard - Sistem PWL POS</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tentang Sistem PWL POS</h3>
            </div>
            <div class="card-body">
                <p>
                    <strong>PWL POS</strong> adalah sistem Point of Sale (POS) berbasis web yang dikembangkan untuk mempermudah pengelolaan transaksi di toko atau usaha kecil.
                    Sistem ini dirancang menggunakan teknologi Laravel dan AdminLTE untuk antarmuka yang responsif dan modern.
                </p>
                <h5>Fitur Utama:</h5>
                <ul>
                    <li>Manajemen Produk dan Kategori</li>
                    <li>Manajemen User dan Hak Akses</li>
                    <li>Proses Transaksi dan Riwayat Penjualan</li>
                    <li>Pengelolaan Laporan Keuangan</li>
                    <li>Integrasi dengan AdminLTE untuk tampilan modern</li>
                </ul>
                <p>
                    Sistem ini bertujuan untuk meningkatkan efisiensi bisnis dan membantu pemilik usaha dalam mengelola stok dan transaksi dengan lebih efektif.
                </p>
            </div>
        </div>
    </div>
</div>
@stop