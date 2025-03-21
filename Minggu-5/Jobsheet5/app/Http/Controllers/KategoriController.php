<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function getData()
    {
        $kategori = KategoriModel::select(['kategori_id', 'kategori_kode', 'kategori_nama', 'created_at', 'updated_at']);

        return DataTables::of($kategori)
            ->addColumn('action', function ($row) {
                return '
                    <a href="' . route('kategori.edit', $row->kategori_id) . '" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger deleteKategori" data-id="' . $row->kategori_id . '">Delete</button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel :: create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        KategoriModel::where('kategori_id', $id)->delete();
        return response()->json(['success' => 'Kategori berhasil dihapus']);
    }
}
