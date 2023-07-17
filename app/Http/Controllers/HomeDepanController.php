<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeDepanController extends Controller
{
    //
    public function index()
    {
        $data = Produk::with('kategori')->get();
        $last = Produk::latest()->first();
        $kat = Kategori::all();

        return view('depan.home', compact(['data', 'last', 'kat']));
    }

    public function show($id)
    {
        $data = Produk::findOrFail($id);

        return view('depan.detil_produk', compact('data'));
    }
}
