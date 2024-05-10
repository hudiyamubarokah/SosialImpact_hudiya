<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    // Properti yang dapat diisi
    protected $fillable = [
        'campaign_id',
        'donation_id',
        'jumlah',
        'mata_uang',
        'pesan',
        'tanggal_donasi'
    ];

    // Relasi dengan Campaign
    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }

    // Relasi dengan Donation
    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donation_id');
    }
}
