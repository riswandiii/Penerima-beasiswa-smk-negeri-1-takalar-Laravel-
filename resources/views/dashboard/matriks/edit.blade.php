@extends('dashboard.layouts.main')

@section('content')

<div class="container">

    <div class="row py-3">
        <div class="col-lg-12">
            <h3>Edit data matriks keputusan</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            {{-- Form tambah data cmatriks keputusan --}}
            <form action="/dashboard/matriks-keputusan/{{ $matriks->id }}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <select class="form-select form-select-sm" name="siswa_id">
                        <option value="{{ $matriks->siswa_id }}">{{ $matriks->siswa->nama }}</option>
                        @foreach($siswas as $siswa)
                        <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select form-select-sm" name="c1">
                        <option value="{{ $matriks->c1 }}">{{ $matriks->c1 }}</option>
                        @foreach($nilais as $nila)
                        <option value="{{ $nila->nilai }}">{{ $nila->nilai_rata_rata }} ({{ $nila->nilai }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select form-select-sm" name="c2">
                        <option value="{{ $matriks->c2 }}">{{ $matriks->c2 }}</option>
                        @foreach($perilakus as $perilaku)
                        <option value="{{ $perilaku->nilai }}">{{ $perilaku->perilaku }} ({{ $perilaku->nilai }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select form-select-sm" name="c3">
                        <option value="{{ $matriks->c3 }}">{{ $matriks->c3 }}</option>
                        @foreach($kehadirans as $kehadiran)
                        <option value="{{ $kehadiran->nilai }}">{{ $kehadiran->kehadiran }} ({{ $kehadiran->nilai }})</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <select class="form-select form-select-sm" name="c4">
                        <option value="{{ $matriks->c4 }}">{{ $matriks->c4 }}</option>
                        @foreach($prestasis as $pretasi)
                        <option value="{{ $pretasi->nilai }}">{{$pretasi->prestasi }} ({{ $pretasi->nilai }})</option>
                        @endforeach
                    </select>
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