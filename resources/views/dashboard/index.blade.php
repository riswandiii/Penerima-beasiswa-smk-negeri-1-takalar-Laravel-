@extends('dashboard.layouts.main')

@section('content')

<div class="row py-3">
  <div class="col-lg-12">
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
      @if($datas->count() > 0)
      <p class="text-success">Pencarian atas nama <strong style="font-style: italic">"{{ request('search') }}"</strong> ditemukan</p>
      @else 
      <p class="text-danger">Pencarian atas nama <strong style="font-style: italic">"{{ request('search') }}"</strong> tidak ditemukan</p>
      @endif
  </div>
</div>
@endif
{{-- End --}}

 {{-- Alert --}}
 @if(session()->has('success'))
 <div class="row">
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

<div class="row mt-3">
  <div class="col-lg-12">
      {{-- Table --}}
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="text-white bg-primary">
              <tr>
                <th>Nama</th>
                <th>Nis</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Hasil akhir</th>
              </tr>
          </thead>
          <tbody>
              @if($datas->count() > 0)
              @foreach($datas as $data)
              @if($data->hasil > 0.5)
              <tr>
                <td>{{ $data->matrik->siswa->nama }}</td>
                <td>{{ $data->matrik->siswa->nis }}</td>
                <td>{{ $data->matrik->siswa->alamat }}</td>
                <td>{{ $data->matrik->siswa->email }}</td>
                <td>{{ $data->hasil}}</td>
              </tr>
              @endif
              @endforeach
              @else 
              <tr>
                  <td colspan="2" class="text-danger">Belum ada data penerima beasiswa</td>
              </tr>
              @endif
          </tbody>
        </table>
      </div>
      {{-- End table --}}
  </div>
</div>
    
@endsection