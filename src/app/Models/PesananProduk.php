<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesananProduk extends Model
{
    protected $fillable = [
        'nama_pembeli',
        'produk_id',
        'qty',
        'total_harga',
        'tanggal',
        'catatan',
    ];

    /**
     * Relasi ke produk.
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
