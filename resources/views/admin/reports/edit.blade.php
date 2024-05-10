@extends('admin.layout.app')

@section('heading', 'Laporan')

@section('main_content')
<h1>Edit Laporan</h1>

<!-- Pastikan untuk menampilkan pesan kesalahan validasi -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Formulir untuk mengedit laporan -->
<form action="{{ route('admin.reports.update', $report->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Menggunakan metode PUT untuk update -->

    <div>
        <label for="campaign_id">Campaign ID:</label>
        <input type="number" class="form-control" name="campaign_id" value="{{ $report->campaign_id }}" required>
    </div>

    <div>
        <label for="donation_id">Donation ID:</label>
        <input type="number" class="form-control" name="donation_id" value="{{ $report->donation_id }}" required>
    </div>

    <div>
        <label for="jumlah">Jumlah:</label>
        <input type="number" class="form-control" step="0.01" name="jumlah" value="{{ $report->jumlah }}" required>
    </div>

    <div>
        <label for="mata_uang">Mata Uang:</label>
        <input type="text" class="form-control" name="mata_uang" value="{{ $report->mata_uang }}" maxlength="3" required>
    </div>

    <div>
        <label for="tanggal_donasi">Tanggal Donasi:</label>
        <input type="datetime-local" class="form-control" name="tanggal_donasi" value="{{ old('tanggal_berakhir', $report->tanggal_donasi) }}}" required>
    </div>

    <div>
        <label for="pesan">Pesan:</label>
        <textarea class="form-control" name="pesan">{{ $report->pesan }}</textarea>
    </div>
<div class="p-4">
<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
<a href="{{ route('admin.reports.index') }}" class="btn btn-primary">Kembali ke Daftar Laporan</a>
</div>
    
</form>


@endsection