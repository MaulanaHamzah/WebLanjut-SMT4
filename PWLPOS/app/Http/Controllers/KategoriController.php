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
        return DataTables::of($kategori)->make(true);
    }
}
