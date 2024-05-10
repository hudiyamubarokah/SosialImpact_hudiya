@extends('admin.layout.app')

@section('heading', 'kampanye')

@section('main_content')
<h1>Daftar Kampanye</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="p-4">
<a href="{{ route('admin.campaigns_create') }}" class="btn btn-primary">Tambah Kampanye Baru</a>

</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kampanye</th>
            <th>Target Donasi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $campaign)
            <tr>
                <td>{{ $campaign->campaign_id }}</td>
                <td>{{ $campaign->nama_kampanye }}</td>
                <td>{{ $campaign->target_donasi }}</td>
                <td>{{ ucfirst($campaign->status) }}</td>
                <td>
                    <a href="{{ route('admin.campaigns_show', $campaign->campaign_id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('admin.campaigns_edit', $campaign->campaign_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.campaigns_destroy', $campaign->campaign_id) }}" method="POST" style="display:inline;">
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