@extends('adminlte::page')

@section('title', 'Manajemen User')

@section('content_header')
    <h1>Manajemen User</h1>
@stop

@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
    <table id="user-table" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->level->level_nama ?? '-' }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->user_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('user.delete', $user->user_id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop