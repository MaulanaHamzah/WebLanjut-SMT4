@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
        </div>
        <form method="post" action="{{ route('user.update', $user->user_id) }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}">
                </div>
                <div class="form-group">
                    <label for="level_id">Level</label>
                    <select class="form-control" id="level_id" name="level_id">
                        <option value="">-- Pilih Level --</option>
                        @foreach($levels as $level)
                            <option value="{{ $level->level_id }}" {{ $user->level_id == $level->level_id ? 'selected' : '' }}>
                                {{ $level->level_nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password (Kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@stop