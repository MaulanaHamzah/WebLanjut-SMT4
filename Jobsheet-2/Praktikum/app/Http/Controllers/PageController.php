<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        return 'Selamat Datang';
    }

    public function about () {
        return 'Nama : Achmad M. Hamzah <br> NIM : 2341720172';

    }

    public function articles ($articleID) {
        return 'Halaman artikel dengan Id {'.$articleID. '}';        
    }
}