@extends('dashboard.layouts.main')

@section('content')

    <div class="container">

        <div class="row py-3">
            <div class="col-lg-12">
                <h3>Data calon penerima beasiswa</h3>
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

            <div class="col-lg-2">
                <a href="/dashboard/calon-penerima/create" class="btn btn-primary btn-sm">Tambah data</a>
            </div>

            <div class="col-lg-4 offset-lg-6">
                {{-- Form search --}}
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Nis siswa..." autofocus name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                </form>
                {{-- end form --}}
            </div>

        </div>

       {{-- Jika ada search --}}
       @if(request('search'))
       <div class="row">
           <div class="col-lg-4 offset-lg-8">
                @if($siswas->count() > 0)
                <p class="text-success">Siswa dengan nis <strong style="font-style: italic">"{{ request('search') }}"</strong> ditemukan!</p>
                @else 
                <p class="text-danger">Siswa dengan nis <strong style="font-style: italic">"{{ request('search') }}"</strong> tidak ditemukan!</p>
                @endif
           </div>
       </div>
       @else 
       @endif
       {{-- end --}}

      <div class="row">
        <div class="col-lg-12">
            {{-- Table data category nilai --}}
            <div class="table-responsive">
                <table class="table table-bordered  table-striped table-sm">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Alamat</th>
                            <th>Tempat tanggal lahir</th>
                            <th>Email</th>
                            <th>No. Handphone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($siswas->count() > 0)
                        @foreach($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->ttl }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td>{{ $siswa->no_handphone }}</td>
                            <td>
                                <a href="/dashboard/calon-penerima/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                {{-- Form delete --}}
                                <form action="/dashboard/calon-penerima/{{ $siswa->id }}" class="d-inline" method="post">
                                    @csrf 
                                    @method('delete')
                                    <button class="border-0 btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete data?')"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                                <a href="/dashboard/calon-penerima/{{ $siswa->id }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                {{-- End form --}}
                            </td>
                        </tr>
                        @endforeach
                        @else 
                        <tr>
                        <td class="text-danger"  colspan="8">Belum ada data calon penerima beasiswa</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{-- End table --}}
        </div>
      </div>

      <div class="row py-3">
        <div class="col-lg-12">
            <p>{{ $siswas->links() }}</p>
        </div>
      </div>

    </div>
    
@endsection