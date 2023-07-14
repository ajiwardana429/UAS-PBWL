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
        Schema::create('stock_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->double('harga');
            $table->foreignId('kategory_id');
            $table->string('distributor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_barangs');
    }
};
