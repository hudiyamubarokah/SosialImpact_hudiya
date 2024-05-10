@extends('admin.layout.app')

@section('heading', 'kampanye')

@section('main_content')
<h1>Detail Kampanye #{{ $campaign->campaign_id }}</h1>

<p><strong>Nama Kampanye:</strong> {{ $campaign->nama_kampanye }}</p>
<p><strong>Deskripsi:</strong> {{ $campaign->deskripsi }}</p>
<p><strong>Target Donasi:</strong> {{ number_format($campaign->target_donasi, 2) }}</p>
<p><strong>Donasi Terkumpul:</strong> {{ number_format($campaign->donasi_terkumpul, 2) }}</p>
<p><strong>Tanggal Mulai:</strong> {{ $campaign->tanggal_mulai }}</p>
<p><strong>Tanggal Berakhir:</strong> {{ $campaign->tanggal_berakhir }}</p>
<p><strong>Status:</strong> {{ ucfirst($campaign->status) }}</p>

<a href="{{ route('admin.campaigns_index') }}" class="btn btn-primary">Kembali ke Daftar Kampanye</a>
<a href="{{ route('admin.campaigns_edit', $campaign->campaign_id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('admin.campaigns_destroy', $campaign->campaign_id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
@endsection