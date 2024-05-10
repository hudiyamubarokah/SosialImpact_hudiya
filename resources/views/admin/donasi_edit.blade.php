@extends('admin.layout.app')

@section('heading', 'donor')

@section('main_content')
<h1>Edit Donor #{{ $donation->donation_id }}</h1>

<form action="{{ route('admin.donasi_update', $donation->donation_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $donation->nama_lengkap) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email', $donation->email) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $donation->nomor_telepon) }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="{{ old('alamat', $donation->alamat) }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kota">Kota</label>
        <input type="text" name="kota" value="{{ old('kota', $donation->kota) }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="kode_pos">Kode Pos</label>
        <input type="text" name="kode_pos" value="{{ old('kode_pos', $donation->kode_pos) }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="negara">Negara</label>
        <input type="text" name="negara" value="{{ old('negara', $donation->negara) }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('admin.donasi_index') }}" class="btn btn-primary">Batal</a>
</form>
@endsection