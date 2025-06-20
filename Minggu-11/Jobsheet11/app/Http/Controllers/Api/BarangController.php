<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'kategori_id' => ['required', 'integer', 'exists:m_kategori,kategori_id'],
            'barang_kode' => [
                'required',
                'min:3',
                'max:20',
                'unique:m_barang,barang_kode'
            ],
            'barang_nama' => ['required', 'string', 'max:100'],
            'harga_beli' => ['required', 'numeric'],
            'harga_jual' => ['required', 'numeric'],
            'image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif,svg,webp',
                'max:2048'
            ],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $id = BarangModel::all()->max('barang_id') + 1;
        $image = $request->file('image');
        $imageName = '[' . $data['barang_kode'] . ']-' . $data['barang_nama'] . '.webp';
        $image->storeAs('public/barang_images', $imageName);
        unset($data['image']);
        $data['image'] = $imageName;

        $barang = BarangModel::create($data);
        return response()->json($barang, 201);
    }

    public function show(BarangModel $barang)
    {
        return $barang;
    }

    public function update(Request $request, BarangModel $barang)
    {
        $barang->update($request->all());
        return BarangModel::find($barang);
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}