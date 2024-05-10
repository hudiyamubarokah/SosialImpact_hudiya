@extends('admin.layout.app')

@section('heading', 'transaksi')

@section('main_content')
<h1>Detail Transaksi #{{ $transaction->id }}</h1>

<p><strong>Campaign ID:</strong> {{ $transaction->campaign_id }}</p>
<p><strong>Donations ID:</strong> {{ $transaction->donations_id }}</p>
<p><strong>Jumlah:</strong> {{ $transaction->jumlah }}</p>
<p><strong>Mata Uang:</strong> {{ $transaction->mata_uang }}</p>
<p><strong>Metode Pembayaran:</strong> {{ $transaction->metode_pembayaran }}</p>
<p><strong>Tanggal Transaksi:</strong> {{ $transaction->tanggal_transaksi }}</p>

<a href="{{ route('admin.transaksi_index') }}" class="btn btn-primary">Kembali ke Daftar</a>
<a href="{{ route('admin.transaction_edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
@endsection