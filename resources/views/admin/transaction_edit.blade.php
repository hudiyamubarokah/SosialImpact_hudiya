@extends('admin.layout.app')

@section('heading', 'transaksi')

@section('main_content')

<h1>Edit Transaksi #{{ $transaction->id }}</h1>

<form action="{{ route('admin.transactions.update', $transaction->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="campaign_id">Campaign ID</label>
        <input type="text" name="campaign_id" value="{{ old('campaign_id', $transaction->campaign_id) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="donations_id">Donations ID</label>
        <input type="text" name="donations_id" value="{{ old('donations_id', $transaction->donations_id) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" value="{{ old('jumlah', $transaction->jumlah) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="mata_uang">Mata Uang</label>
        <input type="text" name="mata_uang" value="{{ old('mata_uang', $transaction->mata_uang) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="metode_pembayaran">Metode Pembayaran</label>
        <input type="text" name="metode_pembayaran" value="{{ old('metode_pembayaran', $transaction->metode_pembayaran) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tanggal_transaksi">Tanggal Transaksi</label>
        <input type="date" name="tanggal_transaksi" value="{{ old('tanggal_transaksi', $transaction->tanggal_transaksi) }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('admin.transaksi_index') }}" class="btn btn-primary">Batal</a>
</form>
@endsection