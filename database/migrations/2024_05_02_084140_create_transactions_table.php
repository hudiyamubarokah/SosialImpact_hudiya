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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('campaign_id') // Referensi ke Kampanye
                  ->constrained('campaigns', 'campaign_id') // Referensi ke kolom campaign_id di tabel kampanye
                  ->onDelete('cascade'); // Hapus jika kampanye dihapus
            $table->foreignId('donation_id') // Referensi ke Donor
                  ->constrained('donations', 'donation_id') // Referensi ke kolom donor_id di tabel donor
                  ->onDelete('cascade'); // Hapus jika donor dihapus
            $table->decimal('jumlah', 10, 2); // Jumlah donasi
            $table->string('mata_uang', 3)->default('IDR'); // Mata uang, default ke IDR
            $table->string('metode_pembayaran'); // Metode pembayaran, misalnya 'kartu kredit', 'transfer bank', dll.
            $table->text('deskripsi')->nullable(); // Deskripsi atau catatan tambahan
            $table->timestamp('tanggal_transaksi'); // Waktu transaksi
            $table->timestamps(); // Created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
