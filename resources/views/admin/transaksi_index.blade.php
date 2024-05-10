@extends('admin.layout.app')

@section('heading', 'transaksi')

@section('main_content')

<div class="container">
    <h1>Daftar Transaksi</h1>
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Campaign ID</th>
                <th>Donations ID</th>
                <th>Jumlah</th>
                <th>Mata Uang</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->campaign_id }}</td>
                    <td>{{ $transaction->donation_id }}</td>
                    <td>{{ $transaction->jumlah }}</td>
                    <td>{{ $transaction->mata_uang }}</td>
                    <td>{{ $transaction->tanggal_transaksi }}</td>
                    <td>
                        <a href="{{ route('admin.transaction_show', $transaction->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('admin.transaction_edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection