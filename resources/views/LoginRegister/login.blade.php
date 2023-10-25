@extends('index')

@section('content')

    <div class="containr-fluid">

        <div class="container">

            <div class="row text-center">

                <div class="col-lg-4 offset-lg-4 mt-5">
                    <h3><img src="/img/logo.png" width="50" alt="">Please log in!</h3>
                </div>

                {{-- Alert --}}
                @if(session()->has('success'))
                <div class="col-lg-4 offset-lg-4 mt-2">
                    <small>
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                    </small>
                </div>
                @endif
                {{-- End alert --}}

                <form action="/login" method="post">
                    @csrf
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 py-3">
                        {{-- Form login --}}
                        <div class="mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email..." autofocus required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
    
                        <div class="mb-2">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"  name="password" placeholder="Password..." autofocus required>
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
                            <button type="submit" class="btn btn-primary w-100">LOGIN</button>
                        </div>
                         {{-- end form --}}
                    </div>
                </form>

            </div>

            <div class="row text-center">
                <div class="col-lg-12 mb-5">
                    <p><small>Don't have account yet? <a href="/register" class="text-decoration-none">Registration</a></small></p>
                </div>
            </div>

        </div>

    </div>

@endsection