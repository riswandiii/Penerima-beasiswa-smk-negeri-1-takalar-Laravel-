@extends('dashboard.layouts.main')

@section('content')

<div class="container">

    <div class="row py-3">
        <div class="col-lg-12">
            <h3>Tambah data calon penerima beasiswa</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            {{-- Form tambah data category nilai rata-rata --}}
            <form action="/dashboard/calon-penerima/{{ $siswa->id }}" method="post">
                @csrf
                @method('put');

                <div class="mb-2">
                    <label class="form-lable">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $siswa->nama) }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-lable">Nis</label>
                    <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis', $siswa->nis) }}">
                    @error('nis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-lable">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $siswa->alamat) }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-lable">Tempat tanggal lahir</label>
                    <input type="date" name="ttl" class="form-control @error('ttl') is-invalid @enderror" value="{{ old('ttl', $siswa->ttl) }}">
                    @error('ttl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-lable">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $siswa->email) }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-lable">No. Handphone</label>
                    <input type="number" name="no_handphone" class="form-control @error('no_handphone') is-invalid @enderror" value="{{ old('no_handphone', $siswa->no_handphone) }}">
                    @error('no_handphone')
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