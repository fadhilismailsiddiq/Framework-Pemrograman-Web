<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = ('Transaksi');
    protected $primaryKey = ('id');
    protected $fillable = [
        'Kode_Barang',
        'Nama_Barang',
        'Jenis_Barang',
        'QTY',
        'Harga',
        'Total',
        'Diskon',
        'Total_Terbaru',
    ];
}
