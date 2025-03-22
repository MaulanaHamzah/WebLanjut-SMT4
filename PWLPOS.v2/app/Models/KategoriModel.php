<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['kategori_kode', 'kategori_nama'];
    public $timestamps = true; // ✅ Pastikan timestamps aktif

    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class, 'barand_id', 'barang_id');
    }
}