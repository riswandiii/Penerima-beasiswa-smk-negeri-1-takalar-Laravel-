@extends('index')

@section('content')

<div class="container">
    
    <div class="row mb-3 text-center">
        <div class="col-lg-12 mt-5">
            <h3>My Profile {{ $user->name }}</h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 mb-5 ">
           
            {{-- Card --}}
            <div class="card p-3">
                <div class="card-body p-3">
                   <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td>:</td>
                                <td>{{ $user->no_handphone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>
            {{-- end card --}}

        </div>
    </div>

</div>

@endsection