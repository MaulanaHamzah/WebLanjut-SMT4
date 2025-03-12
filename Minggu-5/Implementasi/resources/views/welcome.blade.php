@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content_header')
    <h1>Selamat Datang di Aplikasi Laravel</h1>
@stop

@section('content')
    <p>Ini adalah halaman utama aplikasi yang telah menggunakan template AdminLTE.</p>
    <a href="{{ route('user.index') }}" class="btn btn-primary">Kelola User</a>
@stop
