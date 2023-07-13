<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeDepanController extends Controller
{
    //
    public function index()
    {
        $data = Produk::all();
        $last = Produk::latest()->first();

        return view('depan.home', compact(['data', 'last']));
    }

    public function show($id)
    {
        $data = Produk::findOrFail($id);

        return view('depan.detil_produk', compact('data'));
    }
}
