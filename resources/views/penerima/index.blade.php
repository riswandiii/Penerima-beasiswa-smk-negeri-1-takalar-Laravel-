@extends('index')

@section('content')

<div class="container">
    
    <div class="row mb-3 text-center">
        <div class="col-lg-12 mt-5">
            <h3>DAFTAR PENERIMA BEASISWA SMK NEGERI 1 TAKALAR</h3>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-4 offset-lg-8">
            {{-- Form search --}}
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search name..." autofocus>
                    <button class="btn btn-primary" type="submit">Search</button>
                  </div>
            </form>
            {{-- End form --}}
        </div>
    </div>

    {{-- Jika ada search --}}
    @if(request('search'))
    <div class="row mb-3">
        <div class="col-lg-4 offset-lg-8">
            @if($penerimas->count() > 0)
            <p class="text-success">Pencarian atas nama <strong style="font-style: italic">"{{ request('search') }}"</strong> ditemukan</p>
            @else 
            <p class="text-danger">Pencarian atas nama <strong style="font-style: italic">"{{ request('search') }}"</strong> tidak ditemukan</p>
            @endif
        </div>
    </div>
    @endif
    {{-- End --}}

    <div class="row mb-5">
        <div class="col-lg-12">
            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped">
                    <thead class="bg-primary text-white">
                       <tr>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Total rangking</th>
                       </tr>
                    </thead>
                    <tbody>
                        @if($penerimas->count() > 0)
                        @foreach($penerimas as $data)
                        @if($data->hasil >= 0.8)
                        <tr>  
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->matrik->siswa->nis }}</td>
                            <td>{{ $data->matrik->siswa->alamat }}</td>
                            <td>{{ $data->matrik->siswa->email }}</td>
                            <td>{{ $data->hasil}}</td>
                        </tr>
                        @endif
                        @endforeach
                        @else 
                        <tr>
                            <td colspan="5" class="text-danger">Belum ada data penerima beasiswa</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{-- end table --}}
        </div>
    </div>

</div>

@endsection