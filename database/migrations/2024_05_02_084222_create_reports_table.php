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
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('campaign_id') 
                  ->constrained('campaigns', 'campaign_id') // Kampanye terkait
                  ->onDelete('cascade'); // Hapus jika kampanye dihapus
            $table->foreignId('donation_id') // Referensi ke Donor
                  ->constrained('donations', 'donation_id') // Donor terkait
                  ->onDelete('cascade'); // Hapus jika donor dihapus
            $table->decimal('jumlah', 10, 2); // Jumlah donasi
            $table->string('mata_uang', 3)->default('IDR'); // Mata uang
            $table->text('pesan')->nullable(); // Pesan opsional dari donor
            $table->timestamp('tanggal_donasi'); // Tanggal donasi
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
