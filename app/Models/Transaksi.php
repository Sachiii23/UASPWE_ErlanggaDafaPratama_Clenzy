<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['pelanggan_id', 'produk_id', 'jumlah', 'berat', 'status'];

    public function pelanggan()
    {
        // utk menghubungkan dan ambil data dari model Pelanggan
        return $this->belongsTo(Pelanggan::class);
    }

    public function produk()
    {
        // utk menghubungkan dan ambil data dari model produk
        return $this->belongsTo(Produk::class);
    }
}
