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
        Schema::create('transaksi_mobils', function (Blueprint $table) {
            $table->id();
            $table->foreigndId('mobil_id')->references('id')->on('tabel_mobil')->onUpdate('restrict')->onDelete('restrict');
            $table->foreigndId('user_id')->references('users')->on('roles')->onUpdate('restrict')->onDelete('restrict');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->string('status');
            $table->string('plat_nomor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_mobils');
    }
};
