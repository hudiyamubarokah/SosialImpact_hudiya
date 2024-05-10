<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;

class AdminDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::all(); // Mengambil semua data donor
        return view('admin.donasi_index', compact('donations')); // Mengirimkan data ke tampilan
    }

    // Menampilkan formulir untuk membuat donor baru
    public function create()
    {
        return view('admin.donasi_create'); // Tampilan formulir untuk membuat donor baru
    }

    // Menyimpan donor baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:donations,email',
            'nomor_telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'kota' => 'nullable|string',
            'kode_pos' => 'nullable|string|max:10',
            'negara' => 'required|string|max:255',
        ]);

        // Membuat donor baru
        Donation::create($validated);

        return redirect()->route('admin.donasi_index')->with('success', 'Donor berhasil dibuat.');
    }

    // Menampilkan detail donor tertentu
    public function show($id)
    {
        $donation = Donation::findOrFail($id); // Mengambil donor berdasarkan ID
        return view('admin.donasi_show', compact('donation')); // Tampilan detail donor
    }

    // Menampilkan formulir untuk mengedit donor
    public function edit($id)
    {
        $donation = Donation::findOrFail($id); // Mengambil donor untuk diedit
        return view('admin.donasi_edit', compact('donation')); // Tampilan formulir untuk mengedit donor
    }

    // Mengupdate donor yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:donations,email,',
            'nomor_telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'kota' => 'nullable|string',
            'kode_pos' => 'nullable|string|max:10',
            'negara' => 'required|string|max:255',
        ]);

        // Mengupdate donor
        $donation = Donation::findOrFail($id);
        $donation->update($validated);

        return redirect()->route('admin.donasi_index')->with('success', 'Donor berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return redirect()->route('admin.donasi_index')->with('success', 'Transaksi berhasil dihapus.');
    }
    
}
