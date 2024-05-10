<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $table = 'campaigns'; // Nama tabel di database
    protected $primaryKey = 'campaign_id'; // Primary key

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama_kampanye',
        'deskripsi',
        'target_donasi',
        'donasi_terkumpul',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status'
    ];
}
