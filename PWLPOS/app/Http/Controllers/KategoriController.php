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
        ->editColumn('created_at', function ($row) {
            return $row->created_at ? $row->created_at->format('Y-m-d H:i:s') : '-';
        })
        ->editColumn('updated_at', function ($row) {
            return $row->updated_at ? $row->updated_at->format('Y-m-d H:i:s') : '-';
        })
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
}
