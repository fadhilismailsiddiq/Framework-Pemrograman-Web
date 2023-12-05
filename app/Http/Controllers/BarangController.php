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
        $barangs = Barang::all();
        return view('table', compact('barangs'));
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

        if (!$barang) {
            return redirect()->route('barangs.index')->with('error', 'Barang not found.');
        }

        return view('edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $barang = Barang::find($id);

    if (!$barang) {
        return redirect()->route('barangs.index')->with('error', 'Barang not found.');
    }

    // Implementasi logika validasi dan pembaruan data
    $request->validate([
        'kodeBarang' => 'required',
        'namaBarang' => 'required',
        'jenisBarang' => 'required',
        'qty' => 'required|numeric',
        'harga' => 'required|numeric',
    ]);

    // Update data barang
    $barang->update([
        'Kode_Barang' => $request->kodeBarang,
        'Nama_Barang'=> $request->namaBarang,
        'Jenis_Barang' => $request->jenisBarang,
        'QTY' => $request->qty,
        'Harga' => $request->harga,
    ]);

    // Hitung total dan diskon baru
    $total = $request->qty * $request->harga;
    $diskon = 0;
    $totalTerbaru = $total;

    if ($total >= 100000 && $total < 200000) {
        $diskon = $total * 0.1;
        $totalTerbaru = $total - $diskon;
    } elseif ($total >= 200000 && $total < 500000) {
        $diskon = $total * 0.2;
        $totalTerbaru = $total - $diskon;
    } elseif ($total >= 500000) {
        $diskon = $total * 0.5;
        $totalTerbaru = $total - $diskon;
    }

    // Update data diskon dan total terbaru
    $barang->update([
        'Total' => $total,
        'Diskon' => $diskon,
        'Total_Terbaru' => $totalTerbaru,
    ]);

    return redirect()->route('barangs.index')->with('success', 'Barang updated successfully');

    return view('table', compact('barangs'));
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return redirect()->route('barangs.index')->with('error', 'Barang not found.');
        }

        $barang->delete();

        return redirect()->route('barangs.index')->with('success', 'Barang deleted successfully');
    }
}
