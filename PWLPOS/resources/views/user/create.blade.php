@extends('adminlte::page')

@section('title', 'Tambah User')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah User</h3>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ url('/user') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level_id" required>
                    <option value="">-- Pilih Level --</option>
                    @foreach($levels as $level)
                        <option value="{{ $level->level_id }}">{{ $level->level_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop