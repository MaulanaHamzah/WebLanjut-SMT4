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
        return view('user.create');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
    
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function ubah($id)
    {
        $user = UserModel::findOrFail($id);
        return view('user.edit', compact('user')); // Menggunakan view `user/edit.blade.php`
    }

    public function ubah_simpan(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);
        $user->username = $request->username;
        $user->nama = $request->nama;

        // Update password hanya jika ada input baru
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->level_id = $request->level_id;
        $user->save();

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
