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
        Schema::create('transaksi_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreigndId('role_id')->references('id')->on('roles')->onUpdate('restrict')->onDelete('restrict');
            $table->string('nama_rental');
            $table->longText('deskripsi');
            $table->string('alamat');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_rentals');
    }
};
