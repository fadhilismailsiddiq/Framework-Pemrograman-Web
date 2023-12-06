<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class Form extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('form', ['barang'=>$barang]);
    }

    public function create()
    {
        // Implementasi logika pembuatan form
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'jenisBarang' => 'required',
            'qty' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $kodeBarang = $request->kodeBarang;
        $namaBarang = $request->namaBarang;
        $jenisBarang = $request->jenisBarang;
        $qty = $request->qty;
        $harga = $request->harga;
        $total = $qty * $harga;
        $diskon = 0;
        $totalterbaru = $total;

        if($total >= 100000 && $total < 200000){
            $diskon = $total * 0.1;
            $totalterbaru = $total - $diskon;
        }else if($total >= 200000 && $total < 500000){
            $diskon = $total * 0.2;
            $totalterbaru = $total - $diskon;
        }else if($total >= 500000){
            $diskon = $total * 0.5;
            $totalterbaru = $total - $diskon;
        }

        Barang::create([
            'Kode_Barang' => $request-> kodeBarang,
            'Nama_Barang'=> $request-> namaBarang,
            'Jenis_Barang' => $request-> jenisBarang,
            'QTY' => $request-> qty,
            'Harga' => $request-> harga,
            'Total' => $total,
            'Diskon' => $diskon,
            'Total_Terbaru' => $totalterbaru
        ]);

        // Redirect atau berikan respons sesuai kebutuhan
        return view ('table');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
