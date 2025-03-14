<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function index()
{
    $users = UserModel::with('level')->get();
    return view('user.index', compact('users')); // Kirim data ke Blade
}

public function getData()
{
    $users = UserModel::with('level')->get();

    return response()->json([
        'data' => $users->map(function ($user) {
            return [
                'user_id' => $user->user_id,
                'username' => $user->username,
                'nama' => $user->nama,
                'level' => $user->level->level_nama ?? '-',
                'aksi' => '
                    <a href="' . route('user.edit', $user->user_id) . '" class="btn btn-warning btn-sm">Edit</a>
                    <a href="' . route('user.delete', $user->user_id) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Hapus user ini?\')">Hapus</a>
                '
            ];
        }),
    ]);
}

    public function tambah()
    {
        return view('user_tambah');
    }

public function tambah_simpan(Request $request)
{
    // Validasi data input
    $request->validate([
        'username' => 'required|unique:m_user,username',
        'nama' => 'required',
        'password' => 'required|min:5',
        'level_id' => 'required|exists:m_level,level_id'
    ]);

    // Simpan data user
    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make($request->password), // Pastikan tanpa kutip
        'level_id' => $request->level_id
    ]);

    // Redirect kembali ke halaman daftar user dengan pesan sukses
    return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
}

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

public function ubah_simpan($id, Request $request)
{
    // Validasi data input
    $request->validate([
        'username' => 'required|unique:m_user,username,' . $id . ',user_id',
        'nama' => 'required',
        'level_id' => 'required|exists:m_level,level_id'
    ]);

    // Cari user berdasarkan ID
    $user = UserModel::findOrFail($id);
    $user->username = $request->username;
    $user->nama = $request->nama;
    $user->level_id = $request->level_id;

    // Jika password diisi, update password, jika tidak biarkan password lama
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // Simpan perubahan
    $user->save();

    // Redirect ke halaman user dengan pesan sukses
    return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
}

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
