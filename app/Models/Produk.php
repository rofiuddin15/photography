<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'stok',
    ];

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'kategori_produks', 'kategori_id', 'produk_id');
    }
}
