<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;

class AdminCampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua kampanye
        $campaigns = Campaign::all(); // Anda bisa menambahkan pagination atau filter di sini
        return view('admin.campaigns_index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan formulir untuk membuat kampanye baru
        return view('admin.campaigns_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'nama_kampanye' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'target_donasi' => 'required|numeric|min:0',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,berakhir,ditangguhkan',
        ]);

        // Membuat kampanye baru
        Campaign::create($validated);

        return redirect()->route('admin.campaigns_index')->with('success', 'Kampanye berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Menampilkan detail kampanye
        $campaign = Campaign::findOrFail($id);
        return view('admin.campaigns_show', compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Menampilkan formulir untuk mengedit kampanye
        $campaign = Campaign::findOrFail($id);
        return view('admin.campaigns_edit', compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'nama_kampanye' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'target_donasi' => 'required|numeric|min:0',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,berakhir,ditangguhkan',
        ]);

        // Mengupdate kampanye
        $campaign = Campaign::findOrFail($id);
        $campaign->update($validated);

        return redirect()->route('admin.campaigns_index')->with('success', 'Kampanye berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Menghapus kampanye
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect()->route('admin.campaigns_index')->with('success', 'Kampanye berhasil dihapus.');
    }
}
