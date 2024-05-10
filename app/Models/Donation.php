<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
   
    protected $table = 'donations'; // Nama tabel di database
    protected $primaryKey = 'donation_id'; // Primary key

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'alamat',
        'kota',
        'kode_pos',
        'negara'
    ];

}
