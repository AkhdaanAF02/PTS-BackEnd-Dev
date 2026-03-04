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

        Schema::create('pelanggan', function (Blueprint $table): void{
            $table->id();
            $table->string(collumn: 'nama')->unique();
            $table->string(collumn: 'email')->unique();
            $table->string(collumn: 'password')->unique();
            $table->string(collumn: 'KTP')->unique();
            $table->string(collumn: 'alamat');
            $table->string(collumn: 'nomor telepon');
            $table->timestamp();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema:dropIfExist('pelanggan');
    }
};
