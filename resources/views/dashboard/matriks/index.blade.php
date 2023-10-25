@extends('dashboard.layouts.main')

@section('content')

    <div class="container">

        <div class="row py-3">
            <div class="col-lg-12">
                <h3>Data matriks keputusan berdasarkan kriteria bentuk nilai</h3>
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
                <a href="/dashboard/matriks-keputusan/create" class="btn btn-primary btn-sm">Tambah data</a>
            </div>
        </div>

        <div class="col-lg-12">
            {{-- Table data category nilai --}}
            <div class="table-responsive">
                <table class="table table-bordered  table-striped table-sm">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama siswa</th>
                            <th>Nis</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($matriks->count() > 0)
                        @foreach($matriks as $matrik)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $matrik->siswa->nama }}</td>
                            <td>{{ $matrik->siswa->nis }}</td>
                            <td>{{ $matrik->c1 }}</td>
                            <td>{{ $matrik->c2 }}</td>
                            <td>{{ $matrik->c3 }}</td>
                            <td>{{ $matrik->c4 }}</td>
                            <td>
                                <a href="/dashboard/matriks-keputusan/{{ $matrik->id }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                {{-- Form delete --}}
                                <form action="/dashboard/matriks-keputusan/{{ $matrik->id }}" class="d-inline" method="post">
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
                        <td class="text-danger" colspan="8">Belum ada data matriks keputusan</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{-- End table --}}
        </div>

        <div class="row mb-3">
            <div class="col-lg-12">
                <a href="/dashboard/normalisasi-matriks-x" class="btn btn-primary btn-sm">Normalisasi-matriks-x</a>
            </div>
        </div>

    </div>
    
@endsection