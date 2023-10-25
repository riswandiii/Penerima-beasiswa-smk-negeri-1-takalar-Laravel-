@extends('dashboard.layouts.main')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6">

            {{-- Card  --}}
            <div class="card">
                <div class="card-header bg-primary text-white m-3">
                    <h3><i class="bi bi-person-dash-fill"></i> Detail {{ $detail->nama }}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $detail->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Nis</td>
                                    <td>:</td>
                                    <td>{{ $detail->nis }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $detail->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat tggl lahir</td>
                                    <td>:</td>
                                    <td>{{ $detail->ttl }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $detail->email }}</td>
                                </tr>
                                <tr>
                                    <td>No. Handphone</td>
                                    <td>:</td>
                                    <td>{{ $detail->no_handphone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- End card --}}

        </div>
    </div>
</div>

@endsection