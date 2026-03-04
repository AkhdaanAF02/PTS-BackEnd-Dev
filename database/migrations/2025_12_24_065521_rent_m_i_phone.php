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
        Schema::create(table: 'RentMIPhone', callback: function (Blueprint $table): void{
            $table->id();
            $table->string(collumn: 'pelanggan');
            $table->string(collumn: 'seri Iphone');
            $table->string(collumn: 'jadwal penyewaan');
            $table->string(collumn: 'pembayaran sewa');

        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
