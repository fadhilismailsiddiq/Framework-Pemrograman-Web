<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Transaksi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Kode_Barang');
            $table->string('Nama_Barang');
            $table->string('Jenis_Barang');
            $table->string('QTY');
            $table->string('Harga');
            $table->string('Total');
            $table->string('Diskon');
            $table->string('Total_Terbaru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transaksi');
    }
};
