@extends('adminlte::page')

@section('title', 'Edit Kategori')

@section('content_header')
    <h1>Edit Kategori</h1>
@stop

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Kategori</h3>
        </div>
        <form method="post" action="{{ route('kategori.update', $kategori->kategori_id) }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kodeKategori" name="kategori_kode" value="{{ $kategori->kategori_kode }}">
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="kategori_nama" value="{{ $kategori->kategori_nama }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@stop