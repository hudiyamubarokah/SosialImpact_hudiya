<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    // Menampilkan daftar transaksi
    
    // Menampilkan form untuk membuat transaksi baru
    public function create()
    {
        return view('transaksi_create');
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'campaign_id' => 'required|integer',
            'donations_id' => 'required|integer',
            'jumlah' => 'required|numeric',
            'mata_uang' => 'required|string|max:3',
            'metode_pembayaran' => 'required|string',
            'tanggal_transaksi' => 'required|date',
        ]);

        Transaction::create($validated);

        return redirect()->route('admin.transaksi_index')->with('success', 'Transaksi berhasil dibuat.');
    }

    // Menampilkan detail transaksi tertentu
   
}
