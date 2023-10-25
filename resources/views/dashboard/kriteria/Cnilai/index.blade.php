@extends('dashboard.layouts.main')

@section('content')

    <div class="container">

        <div class="row py-3">
            <div class="col-lg-12">
                <h3>Data kriteria nilai rata-rata rapor</h3>
            </div>
        </div>

        {{-- Alert --}}
        @if(session()->has('success'))
        <div class="row mb-3">
            <div class="col-lg-6">
                <small>
                    <div class="alert alert-primary" role="alert">
                       {{ session('success') }}
                    </div>
                </small>
            </div>
        </div>
        @endif
        {{-- End alert --}}

        <div class="row mb-3">
            <div class="col-lg-12">
                <a href="/dashboard/kriteria-penilaian/create" class="btn btn-primary btn-sm">Tambah data</a>
            </div>
        </div>

        <div class="col-lg-12">
            {{-- Table data kriteria nilai --}}
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nilai rata-rata</th>
                            <th>Nilai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($nilais->count() > 0)
                        @foreach($nilais as $nilai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $nilai->nilai_rata_rata }}</td>
                            <td>{{ $nilai->nilai }}</td>
                            <td>
                                <a href="/dashboard/kriteria-penilaian/{{ $nilai->id }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                {{-- Form delete --}}
                                <form action="/dashboard/kriteria-penilaian/{{ $nilai->id }}" class="d-inline" method="post">
                                    @csrf 
                                    @method('delete')
                                    <button class="border-0 btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete data?')"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                                {{-- End form --}}
                            </td>
                        </tr>
                        @endforeach
                        @else 
                        <tr>
                        <td class="text-danger">Belum ada kriteria nilai rata-rata</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{-- End table --}}
        </div>

    </div>
    
@endsection