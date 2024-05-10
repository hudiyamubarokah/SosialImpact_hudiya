@extends('admin.layout.app')

@section('heading', 'Laporan')

@section('main_content')
<h1>Buat Laporan Baru</h1>
    <form action="{{ route('admin.reports.store') }}" method="POST">
        @csrf
        <!-- Formulir untuk membuat laporan -->
        <div class="mb-3">
            <label for="campaign_id" class="col-md-4 col-form-label text-md-right">Campaign ID</label>

                                <div class="col-md-6">
                                    <input id="campaign_id" type="number" class="form-control @error('campaign_id') is-invalid @enderror" name="campaign_id" value="{{ old('campaign_id') }}" required autocomplete="campaign_id" autofocus>

                                    @error('campaign_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>
                                <div class="mb-3">
                                <label for="campaign_id" class="col-md-4 col-form-label text-md-right">Donation_id</label>

                                <div class="col-md-6">
                                    <input id="donation_id" type="number" class="form-control @error('donation_id') is-invalid @enderror" name="donation_id" value="{{ old('donation_id') }}" required autocomplete="donation_id" autofocus>

                                    @error('campaign_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>                    
        <div>
            <label for="jumlah">Jumlah:</label>
            <input type="text" class="form-control" name="jumlah" required>
        </div>
        <div>
            <label for="mata_uang">Mata Uang:</label>
            <input type="text" class="form-control" name="mata_uang" value="IDR">
        </div>
        <div>
            <label for="tanggal_donasi">Tanggal Donasi:</label>
            <input type="datetime-local" class="form-control" name="tanggal_donasi" required>
        </div>
        <div>
            <label for="pesan">Pesan:</label>
            <textarea class="form-control" name="pesan"></textarea>
        </div>
        <div class="p-5">
             <button type="submit" class="btn btn-primary">Buat Laporan</button>
        </div>
       
    </form>
@endsection