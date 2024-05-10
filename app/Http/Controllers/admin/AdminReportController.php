<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report; // Model Report yang dibuat dari tabel 'reports'
use App\Models\Campaign; // Model untuk tabel 'campaigns'
use App\Models\Donation;
use Barryvdh\DomPDF\Facade\Pdf as PDF; 

class AdminReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::with(['campaign', 'donation'])->get();
        return view('admin.reports.index', ['reports' => $reports]); // view untuk tampilan CRUD
    }

    // Menampilkan formulir untuk membuat laporan baru
    public function create()
    {
        return view('admin.reports.create'); // view untuk form pembuatan
    }

    // Menyimpan laporan baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'campaign_id' => 'required|exists:campaigns,campaign_id',
            'donation_id' => 'required|exists:donations,donation_id',
            'jumlah' => 'required|numeric|min:0',
            'mata_uang' => 'required|string|max:3',
            'tanggal_donasi' => 'required|date',
            'pesan' => 'nullable|string',
        ]);

        Report::create($validatedData);

        return redirect()->route('admin.reports.index')->with('success', 'Laporan berhasil ditambahkan.');
    }

    // Menampilkan formulir untuk mengedit laporan berdasarkan ID
    public function edit($id)
    {
        $report = Report::find($id);

        if (!$report) {
            return redirect()->route('admin.reports.index')->with('error', 'Laporan tidak ditemukan.');
        }

        return view('admin.reports.edit', ['report' => $report]); // view untuk form pengeditan
    }

    // Memperbarui laporan berdasarkan ID
    public function update(Request $request, $id)
    {
        $report = Report::find($id);

        if (!$report) {
            return redirect()->route('admin.reports.index')->with('error', 'Laporan tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'campaign_id' => 'exists:campaigns,campaign_id',
            'donation_id' => 'exists:donations,donation_id',
            'jumlah' => 'numeric|min:0',
            'mata_uang' => 'string|max:3',
            'tanggal_donasi' => 'date',
            'pesan' => 'nullable|string',
        ]);

        $report->update($validatedData);

        return redirect()->route('admin.reports.index')->with('success', 'Laporan berhasil diperbarui.');
    }

    // Menghapus laporan berdasarkan ID
    public function destroy($id)
    {
        $report = Report::find($id);

        if (!$report) {
            return redirect()->route('admin.reports.index')->with('error', 'Laporan tidak ditemukan.');
        }

        $report->delete();

        return redirect()->route('admin.reports.index')->with('success', 'Laporan berhasil dihapus.');
    }

    // Mengekspor daftar laporan ke PDF
    public function exportPdf()
    {
        $reports = Report::with(['campaign', 'donation'])->get(); // mengambil data laporan
        $pdf = PDF::loadView('admin.reports.pdf', ['reports' => $reports]); // tampilan PDF

        return $pdf->download('laporan.pdf'); // unduh sebagai PDF
    }
}
