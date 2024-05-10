<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Campaign;

class HomeController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all(); 
        return view('index', Compact('campaigns'));
    }
    public function donasi()
    {
        return view('donasi');
    }
    public function donasi_detail()
    {
        return view('donasi_detail');
    }

    // public function create()
    // {
    //     return view('transactions.create');
    // }

    // Menyimpan transaksi baru
     // Menampilkan formulir untuk membuat transaksi baru
     public function create()
     {
         return view('transaksi_create'); // Tampilan untuk membuat transaksi
     }
 
     // Menyimpan transaksi baru
     public function store(Request $request)
{
    // Validasi data
    $validated = $request->validate([
        'campaign_id' => 'required|integer',
        'donations_id' => 'required|integer',
        'jumlah' => 'required|numeric',
        'mata_uang' => 'required|string|max:3',
        'metode_pembayaran' => 'required|string',
        'tanggal_transaksi' => 'required|date',
    ]);

    // Membuat dan menyimpan data baru
    Transaction::create($validated);

    // Redirect setelah berhasil
    return redirect()->route('admin.transaksi_index')->with('success', 'Transaksi berhasil dibuat.');
}
}

