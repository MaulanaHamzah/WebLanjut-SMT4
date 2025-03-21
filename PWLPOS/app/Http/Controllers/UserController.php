<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function getData()
    {
        $users = UserModel::select(['user_id', 'username', 'nama', 'created_at', 'updated_at']);

        return DataTables::of($users)
            ->addColumn('action', function ($row) {
                return '
                    <a href="' . route('user.edit', $row->user_id) . '" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger deleteUser" data-id="' . $row->user_id . '">Delete</button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $levels = LevelModel::all(); // Ambil semua level dari database
        return view('user.create', compact('levels'));
    }

    public function store(Request $request)
    {
        // Validasi input sebelum menyimpan ke database
        $request->validate([
            'level_id' => 'required|exists:m_level,level_id',
            'username' => 'required|string|max:20|unique:m_user,username',
            'nama' => 'required|string|max:100',
            'password' => 'required|string|min:6',
        ]);

        // Simpan data ke database jika lolos validasi
        UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $levels = LevelModel::all(); // Ambil semua level

        return view('user.edit', compact('user', 'levels'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'level_id' => 'required|exists:m_level,level_id', // Pastikan level_id ada di tabel m_level
            'username' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'password' => 'nullable|string|min:6',
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy($id)
    {
        UserModel::where('user_id', $id)->delete();
        return response()->json(['success' => 'User berhasil dihapus']);
    }
}