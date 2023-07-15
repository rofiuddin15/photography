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
            'nama' => 'Paket Mantenan 1',
            'deskripsi' => 'ini adalah paket lengkap dari dinasaurus',
            'stok' => 5,
            'harga' => '20000000'
        ]);

        Produk::create([
            'nama' => 'Paket Mantenan 2',
            'deskripsi' => 'ini adalah paket lengkap dari mantenan plus foto',
            'stok' => 5,
            'harga' => '30000000'
        ]);

        Produk::create([
            'nama' => 'Paket Mantenan 3',
            'deskripsi' => 'ini adalah paket lengkap dari dinasaurus plus foto priweding',
            'stok' => 5,
            'harga' => '40000000'
        ]);

        Produk::create([
            'nama' => 'Paket Mantenan 4',
            'deskripsi' => 'ini adalah paket lengkap dari dinasaurus plus paket manten 2',
            'stok' => 5,
            'harga' => '45000000'
        ]);
    }
}
