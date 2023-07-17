<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'kategori_produks', 'produk_id', 'kategori_id');
    }
}
