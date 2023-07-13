<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Paket Simple'
        ]);

        Kategori::create([
            'nama' => 'Paket Double'
        ]);

        Kategori::create([
            'nama' => 'Paket A + Prewed'
        ]);

        Kategori::create([
            'nama' => 'Paket Serba Bonus'
        ]);
    }
}
