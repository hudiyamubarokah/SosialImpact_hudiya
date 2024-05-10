<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'campaign_id',
        'donation_id',
        'jumlah',
        'mata_uang',
        'metode_pembayaran',
        'deskripsi',
        'tanggal_transaksi',
    ];

    // Relasi ke kampanye
    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'campaign_id');
    }

    // Relasi ke donasi
    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donation_id', 'donation_id');
    }
}
