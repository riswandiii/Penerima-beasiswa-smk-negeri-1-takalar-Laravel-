@extends('dashboard.layouts.main')

@section('content')

<div class="container">

    <div class="row py-3">
        <div class="col-lg-12">
            <h3>Edit data kriteria prestasi akademik</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            {{-- Form tambah data kriteria nilai rata-rata --}}
            <form action="/dashboard/kriteria-prestasi/{{ $prestasi->id }}" method="post">
                @csrf
                @method('put')

                <div class="mb-2">
                    <label class="form-lable">Prestasi akademik</label>
                    <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" value="{{ old('prestasi', $prestasi->prestasi) }}">
                    @error('prestasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-lable">Nilai</label>
                    <input type="number" name="nilai" class="form-control @error('nilai') is-invalid @enderror" value="{{ old('nilai', $prestasi->nilai) }}">
                    @error('nilai')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <button type="submit" class="btn btn-primary w-50 btn-sm">Submit</button>
                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                </div>

            </form>
            {{-- End form --}}
        </div>
    </div>

</div>

@endsection