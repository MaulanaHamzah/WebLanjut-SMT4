@extends('adminlte::page')

@section('title', 'Profile Mahasiswa')

@section('content_header')
    <h1>Profile Mahasiswa</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Identitas Mahasiswa</h3>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('storage/FotoSaya.jpg') }}" alt="Foto Mahasiswa" class="img-fluid mb-3" width="150">
                <h5>Nama: <strong>Achmad Maulana Hamzah</strong></h5>
                <h5>NIM: <strong>2341720172</strong></h5>
                <h5>Program Studi: <strong>Teknik Informatika</strong></h5>
                <h5>Universitas: <strong>Politeknik Negeri Malang</strong></h5>
            </div>
        </div>
    </div>
</div>
@stop