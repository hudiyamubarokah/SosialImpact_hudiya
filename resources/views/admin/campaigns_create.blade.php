@extends('admin.layout.app')

@section('heading', 'kampanye')

@section('main_content')
<h1>Tambah Kampanye Baru</h1>

<form action="{{ route('admin.campaigns_store') }}" method="POST">
    @csrf <!-- Token CSRF untuk keamanan -->

    <div class="form-group">
        <label untuk="nama_kampanye">Nama Kampanye</label>
        <input type="text" name="nama_kampanye" value="{{ old('nama_kampanye') }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label untuk="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi') }}</textarea>
    </div>

    <div class="form-group">
        <label untuk="target_donasi">Target Donasi</label>
        <input type="number" step="0.01" name="target_donasi" value="{{ old('target_donasi') }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label untuk="tanggal_mulai">Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" class="form-control" required value="{{ old('tanggal_mulai') }}">
    </div>

    <div class="form-group">
        <label untuk="tanggal_berakhir">Tanggal Berakhir</label>
        <input type="date" name="tanggal_berakhir" class="form-control" value="{{ old('tanggal_berakhir') }}">
    </div>

    <div class="form-group">
        <label untuk="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="berakhir" {{ old('status') == 'berakhir' ? 'selected' : '' }}>Berakhir</option>
            <option value="ditangguhkan" {{ old('status') == 'ditangguhkan' ? 'selected' : '' }}>Ditangguhkan</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('admin.campaigns_index') }}" class="btn btn-primary">Batal</a>
</form>
@endsection