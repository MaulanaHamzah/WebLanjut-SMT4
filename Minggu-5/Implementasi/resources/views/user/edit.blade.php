@extends('adminlte::page')

@section('title', 'Ubah User')

@section('content_header')
    <h1>Ubah User</h1>
@stop

@section('content')
    <form action="{{ route('user.update', $data->user_id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="{{ $data->username }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password (Kosongkan jika tidak ingin diubah)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level_id" class="form-control" required>
                <option value="1" {{ $data->level_id == 1 ? 'selected' : '' }}>Administrator</option>
                <option value="2" {{ $data->level_id == 2 ? 'selected' : '' }}>Manager</option>
                <option value="3" {{ $data->level_id == 3 ? 'selected' : '' }}>Staff/Kasir</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@stop