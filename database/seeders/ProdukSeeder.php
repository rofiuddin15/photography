<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'kategori_id' => 1,
            'nama' => 'Paket Mantenan',
            'deskripsi' => 'ini adalah paket lengkap dari dinasaurus',
            'stok' => 5,
            'harga' => '30000000'
        ]);
    }
}
