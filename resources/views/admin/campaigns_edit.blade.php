@extends('admin.layout.app')

@section('heading', 'kampanye')

@section('main_content')

<h1>Edit Kampanye #{{ $campaign->campaign_id }}</h1>

<form action="{{ route('admin.campaigns_update', $campaign->campaign_id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Metode HTTP PUT untuk pembaruan -->

    <!-- Nama Kampanye -->
    <div class="form-group">
        <label untuk="nama_kampanye">Nama Kampanye</label>
        <input type="text" name="nama_kampanye" value="{{ old('nama_kampanye', $campaign->nama_kampanye) }}" class="form-control" required>
    </div>

    <!-- Deskripsi -->
    <div class="form-group">
        <label untuk="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $campaign->deskripsi) }}</textarea>
    </div>

    <!-- Target Donasi -->
    <div class="form-group">
        <label untuk="target_donasi">Target Donasi</label>
        <input type="number" step="0.01" name="target_donasi" required class="form-control" value="{{ old('target_donasi', $campaign->target_donasi) }}">
    </div>

    <!-- Tanggal Mulai -->
    <div class="form-group">
        <label untuk="tanggal_mulai">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" required class="form-control" value="{{ old('tanggal_mulai', $campaign->tanggal_mulai) }}">
    </div>

    <!-- Tanggal Berakhir -->
    <div class="form-group">
        <label untuk="tanggal_berakhir">Tanggal Berakhir</label>
        <input type="date" name="tanggal_berakhir" class="form-control" value="{{ old('tanggal_berakhir', $campaign->tanggal_berakhir) }}">
    </div>

    <!-- Status -->
    <div class="form-group">
        <label untuk="status">Status</label>
        <select name="status" required class="form-control">
            <option value="aktif" {{ old('status', $campaign->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="berakhir" {{ old('status', $campaign->status) == 'berakhir' ? 'selected' : '' }}>Berakhir</option>
            <option value="ditangguhkan" {{ old('status', $campaign->status) == 'ditangguhkan' ? 'selected' : '' }}>Ditangguhkan</option>
        </select>
    </div>

    <!-- Tombol Simpan dan Batal -->
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('admin.campaigns_index') }}" class="btn btn-primary">Batal</a>
</form>
@endsection