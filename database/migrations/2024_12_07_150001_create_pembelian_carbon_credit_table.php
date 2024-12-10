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
        Schema::create('pembelian_carbon_credits', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pembelian_carbon_credit')->unique();
            $table->integer('jumlah_pembelian_carbon_credit');
            $table->date('tanggal_pembelian_carbon_credit');
            $table->string('bukti_pembelian');
            $table->string('deskripsi');
            $table->foreignId('kode_manager')->constrained('managers')->onDelete('cascade');
            $table->foreignId('kode_admin')->constrained('admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_carbon_credits');
    }
};
