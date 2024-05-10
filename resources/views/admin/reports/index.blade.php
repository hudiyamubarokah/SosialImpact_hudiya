@extends('admin.layout.app')

@section('heading', 'Laporan')

@section('main_content')
    <h1>Daftar Laporan</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="p-4">
<a href="{{ route('admin.reports.create') }}" class="btn btn-primary">Buat Laporan Baru</a>
<a href="{{ route('admin.reports.exportPdf') }}" class="btn btn-primary">Ekspor ke PDF</a>
</div>
    

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kampanye</th>
                <th>Donasi</th>
                <th>Jumlah</th>
                <th>Mata Uang</th>
                <th>Tanggal Donasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->campaign_id}}</td>
                    <td>{{ $report->donation_id }}</td>
                    <td>{{ $report->jumlah }}</td>
                    <td>{{ $report->mata_uang }}</td>
                    <td>{{ $report->tanggal_donasi }}</td>
                    <td>
                        <a href="{{ route('admin.reports.edit', $report->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('admin.reports.destroy', $report->id) }}" method="POST" style="display:inline;">
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