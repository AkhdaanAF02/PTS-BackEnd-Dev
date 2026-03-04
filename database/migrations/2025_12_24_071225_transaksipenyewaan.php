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
        schema::create('transaksi penyewaan', function(blueprint $table){
            $table->id();
            $table->string('penyewa');
            $table->string('tanggal sewa');
            $table->string('durasi sewa');
            $table->enum('pembayaran', ['lunas', 'belum lunas', 'menyicil']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema:dropIfExist('transaksipenyewaan');
    }
};
