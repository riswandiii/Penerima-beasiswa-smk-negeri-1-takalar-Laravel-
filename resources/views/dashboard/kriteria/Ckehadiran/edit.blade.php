@extends('dashboard.layouts.main')

@section('content')

<div class="container">

    <div class="row py-3">
        <div class="col-lg-12">
            <h3>Edit data kriteria absensi kehadiran</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            {{-- Form tambah data kriteria nilai rata-rata --}}
            <form action="/dashboard/kriteria-absensi/{{ $kehadiran->id }}" method="post">
                @csrf
                @method('put');

                <div class="mb-2">
                    <label class="form-lable">Kehadiran</label>
                    <input type="text" name="kehadiran" class="form-control @error('kehadiran') is-invalid @enderror" value="{{ old('kehadiran', $kehadiran->kehadiran) }}">
                    @error('kehadiran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-lable">Nilai</label>
                    <input type="number" name="nilai" class="form-control @error('nilai') is-invalid @enderror" value="{{ old('nilai', $kehadiran->nilai) }}">
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