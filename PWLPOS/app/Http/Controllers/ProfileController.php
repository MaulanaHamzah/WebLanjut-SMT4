<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Data diri statis (karena tidak perlu login)
        $user = (object) [
            'foto' => 'FotoSaya.jpg',
            'nama' => 'Achmad Maulana Hamzah',
            'kelas' => 'TI-2A',
            'nim' => '2341720172',
            'programStudi' => 'D-IV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'maulanahamzah20092004@gmail.com',
            'telepon' => '082131973378',
        ];

        return view('profile.index', compact('user'));
    }
}