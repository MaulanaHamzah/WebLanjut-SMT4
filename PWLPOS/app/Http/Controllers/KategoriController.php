<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = KategoriModel::all();
        return view('kategori.index', compact('kategoris'));
    }

    public function getData()
    {
        $kategori = KategoriModel::all();

        return response()->json([
            'data' => $kategori->map(function ($item) {
                return [
                    'kategori_id' => $item->kategori_id,
                    'kategori_kode' => $item->kategori_kode,
                    'kategori_nama' => $item->kategori_nama,
                    'aksi' => '
                        <a href="' . route('kategori.edit', $item->kategori_id) . '" class="btn btn-warning btn-sm">Edit</a>
                        <a href="' . route('kategori.delete', $item->kategori_id) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Hapus kategori ini?\')">Hapus</a>
                    '
                ];
            }),
        ]);
    }

    public function tambah()
    {
        return view('kategori.create');
    }

    public function tambah_simpan(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama
        ]);
    
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function ubah($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function ubah_simpan(Request $request, $id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus.');
    }
}
