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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id('campaign_id'); // Primary key dengan nama khusus
            $table->string('nama_kampanye'); // Nama kampanye
            $table->text('deskripsi'); // Deskripsi kampanye
            $table->decimal('target_donasi', 10, 2); // Target donasi dengan dua angka desimal
            $table->decimal('donasi_terkumpul', 10, 2)->default(0); // Donasi yang telah terkumpul
            $table->timestamp('tanggal_mulai'); // Tanggal mulai kampanye
            $table->timestamp('tanggal_berakhir')->nullable(); // Tanggal berakhir kampanye, opsional
            $table->enum('status', ['aktif', 'berakhir', 'ditangguhkan'])->default('aktif'); // Status kampanye
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
