@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Selamat datang, {{ auth()->user()->nama }}!</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@stop