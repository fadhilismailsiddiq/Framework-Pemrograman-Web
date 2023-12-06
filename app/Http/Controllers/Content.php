<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class Content extends Controller
{
    public function index()
    {
        $barang = Barang::orderBy('created_at','desc')->get();

        return view('main', compact('barang'));
    }

    public function create()
    {
        // Implementasi logika pembuatan form
    }

    public function store(Request $request)
    {
        // Implementasi logika penyimpanan data dari form
    }

    public function show(string $id)
    {
        // Implementasi logika tampilan data berdasarkan $id
    }

    public function edit(string $id)
    {
        // Implementasi logika form untuk mengedit data berdasarkan $id
    }

    public function update(Request $request, string $id)
    {
        // Implementasi logika pembaruan data berdasarkan $id
    }

    public function destroy(string $id)
    {
        // Implementasi logika penghapusan data berdasarkan $id
    }
}
