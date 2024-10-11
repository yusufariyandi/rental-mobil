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
        Schema::create('rental_mobils', function (Blueprint $table) {
            $table->id();
            $table->foreigndId('rental_mobil_id')->references('id')->on('rental_mobil')->onUpdate('restrict')->onDelete('restrict');
            $table->string('plat_nomor');
            $table->string('warna');
            $table->string('merek');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_mobils');
    }
};
