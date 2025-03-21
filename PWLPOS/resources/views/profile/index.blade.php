@extends('adminlte::page')

@section('title', 'Profil Saya')

@section('content_header')
    <h1>Profil Saya</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Identitas Mahasiswa</h3>
        </div>
        </div>
        <div class="card-body">
            <img src="{{ asset('uploads/' . $user->foto) }}" alt="Foto Profil" class="img-thumbnail" width="150">
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $user->nama }}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{ $user->kelas }}</td>
                </tr>
                <tr>
                    <th>Nim</th>
                    <td>{{ $user->nim }}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>{{ $user->programStudi }}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{ $user->jurusan }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $user->telepon }}</td>
                </tr>
            </table>
        </div>
    </div>
@stop