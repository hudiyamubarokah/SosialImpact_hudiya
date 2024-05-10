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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id('beneficiary_id'); // Primary Key
            $table->string('name'); // Nama penerima manfaat
            $table->text('description'); // Keterangan
            $table->text('contact_info'); // Informasi kontak
            $table->foreignId('associated_campaign_id')->nullable()->constrained('campaigns', 'campaign_id'); // Referensi ke Campaigns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
