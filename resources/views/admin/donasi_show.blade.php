@extends('admin.layout.app')

@section('heading', 'donor')

@section('main_content')
<h1>Detail Donor #{{ $donation->id }}</h1>

<p><strong>Nama Lengkap:</strong> {{ $donation->nama_lengkap }}</p>
<p><strong>Email:</strong> {{ $donation->email }}</p>
<p><strong>Nomor Telepon:</strong> {{ $donation->nomor_telepon }}</p>
<p><strong>Alamat:</strong> {{ $donation->alamat }}</p>
<p><strong>Kota:</strong> {{ $donation->kota }}</p>
<p><strong>Negara:</strong> {{ $donation->negara }}</p>

<a href="{{ route('admin.donasi_index') }}" class="btn btn-primary">Kembali ke Daftar</a>
<a href="{{ route('admin.donasi_edit', $donation->donation_id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('admin.donasi_destroy', $donation->donation_id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
@endsection