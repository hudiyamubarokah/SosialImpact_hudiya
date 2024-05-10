<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $transactions = Transaction::all();
        return view('admin.transaksi_index', compact('transactions'));
    }

    // Menampilkan form untuk membuat transaksi baru

    // Menyimpan transaksi baru

    // Menampilkan detail transaksi tertentu
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('admin.transaction_show', compact('transaction'));
    }

    // Menampilkan form untuk mengedit transaksi
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('admin.transaction_edit', compact('transaction'));
    }

    // Mengupdate transaksi
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'campaign_id' => 'required|integer',
            'donations_id' => 'required|integer',
            'jumlah' => 'required|numeric',
            'mata_uang' => 'required|string|max:3',
            'metode_pembayaran' => 'required|string',
            'tanggal_transaksi' => 'required|date',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($validated);

        return redirect()->route('admin.transaksi_index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    // Menghapus transaksi
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('admin.transaksi_index')->with('success', 'Transaksi berhasil dihapus.');
    }

    /**
     * Show the form for creating a new resource.
     */
    
}
