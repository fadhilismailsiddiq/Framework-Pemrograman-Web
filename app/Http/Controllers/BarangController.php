<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('table', ['barang'=>$barang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implementasi logika validasi dan penyimpanan data
        $request->validate([
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            // ... sesuaikan dengan kolom lainnya
        ]);

        // Logika penyimpanan data
        Barang::create([
            'Kode_Barang' => $request->kodeBarang,
            'Nama_Barang' => $request->namaBarang,
            // ... sesuaikan dengan kolom lainnya
        ]);

        return redirect()->route('barangs.index')->with('success', 'Barang created successfully');
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
        $barang = Barang::find($id);

        return view('edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $data=[
        'Kode_Barang' => $request->Kode_Barang,
            'Nama_Barang'=> $request-> Nama_Barang,
            'Jenis_Barang' => $request-> Jenis_Barang,
            'QTY' => $request-> QTY,
            'Harga' => $request-> Harga,
            // 'Total' => $request-> total,
            // 'Diskon' => $request-> diskon,
            // 'Total_Terbaru' => $request-> totalterbaru
    ];

    $barang = Barang::find($id)->update($data);

    return redirect('/table');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id)->delete();
        return redirect('/table');
    }
}
