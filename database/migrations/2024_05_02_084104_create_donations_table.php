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
        Schema::create('donations', function (Blueprint $table) {
            $table->id('donation_id'); // Primary key
            $table->string('nama_lengkap'); // Nama lengkap donor
            $table->string('email')->unique(); // Email donor, harus unik
            $table->string('nomor_telepon')->nullable(); // Nomor telepon donor, opsional
            $table->string('alamat')->nullable(); // Alamat donor, opsional
            $table->string('kota')->nullable(); // Kota tempat tinggal donor, opsional
            $table->string('kode_pos')->nullable(); // Kode pos, opsional
            $table->string('negara')->default('Indonesia'); // Negara, default ke 'Indonesia'
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
