@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit User</h3>
            </div>
            <form action="{{ route('user.update', $user->user_id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password (kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="level_id">Level</label>
                        <select class="form-control" id="level_id" name="level_id" required>
                            <option value="1" {{ $user->level_id == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $user->level_id == 2 ? 'selected' : '' }}>Manager</option>
                            <option value="3" {{ $user->level_id == 3 ? 'selected' : '' }}>Staff/Kasir</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop