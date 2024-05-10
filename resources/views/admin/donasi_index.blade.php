<!-- resources/views/admin/donasi_index.blade.php -->
@extends('admin.layout.app')

@section('heading', 'donor')

@section('main_content')

<div class="container">
<h1>Daftar Donor</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="p-4">
    <a href="{{ route('admin.donasi_create') }}" class="btn btn-primary">Tambah Donor Baru</a>
</div>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Negara</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($donations as $donation)
            <tr>
                <td>{{ $donation->donation_id }}</td>
                <td>{{ $donation->nama_lengkap }}</td>
                <td>{{ $donation->email }}</td>
                <td>{{ $donation->nomor_telepon }}</td>
                <td>{{ $donation->alamat }}</td>
                <td>{{ $donation->kota }}</td>
                <td>{{ $donation->negara }}</td>
                <td>
                    <a href="{{ route('admin.donasi_show', $donation->donation_id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('admin.donasi_edit', $donation->donation_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.donasi_destroy', $donation->donation_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
