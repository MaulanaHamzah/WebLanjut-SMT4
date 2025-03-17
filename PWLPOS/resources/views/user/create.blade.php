@extends('adminlte::page')

@section('title', 'Tambah User')

@section('content_header')
    <h1>Tambah User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah User</h3>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="level_id">Level</label>
                        <select class="form-control" id="level_id" name="level_id" required>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                            <option value="3">Staff/Kasir</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop