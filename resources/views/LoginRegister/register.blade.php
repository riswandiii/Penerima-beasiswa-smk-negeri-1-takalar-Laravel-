@extends('index')

@section('content')

    <div class="containr-fluid">

        <div class="container">

            <div class="row text-center">

                <div class="col-lg-4 offset-lg-4 mt-5">
                    <h3><img src="/img/logo.png" width="50" alt="">Please registration!</h3>
                </div>

                <div class="col-lg-4 offset-lg-4 py-3">
                    {{-- Form login --}}
                    <form action="/register" method="post">
                        @csrf
                        <div class="mb-2">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Name..." autofocus required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="mb-2">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"  value="{{ old('alamat') }}" name="alamat" placeholder="Alamat..."  autofocus required>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="mb-2">
                            <input type="number" class="form-control  @error('no_handphone') is-invalid @enderror" value="{{ old('no_handphone') }}" name="no_handphone" placeholder="No. Hnadphone..." autofocus required>
                            @error('no_handphone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email..." autofocus required>
                            @error('no_handphone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="mb-2">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}" name="password" placeholder="Password..." autofocus required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="form-check text-start mb-3">
                            <input class="form-check-input" type="checkbox"  id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Show password
                            </label>
                          </div>
    
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">REGISTRATION</button>
                        </div>
                    </form>
                     {{-- end form --}}
                </div>

            </div>

            <div class="row text-center">
                <div class="col-lg-12 mb-5">
                    <p><small>Already have an account? <a href="/login" class="text-decoration-none">Login</a></small></p>
                </div>
            </div>

        </div>

    </div>

@endsection