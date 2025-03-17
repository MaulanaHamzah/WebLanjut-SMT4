@extends('adminlte::page')

@section('title', 'Manajemen Kategori')

@section('content_header')
    <h1>Manajemen Kategori</h1>
@stop

@section('content')
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
    <table id="kategori-table" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
            <tr>
                <td>{{ $kategori->kategori_id }}</td>
                <td>{{ $kategori->kategori_kode }}</td>
                <td>{{ $kategori->kategori_nama }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $kategori->kategori_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('kategori.delete', $kategori->kategori_id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus kategori ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop