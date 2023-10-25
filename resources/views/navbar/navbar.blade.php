<div class="container-fluid" id="navbar">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="/img/logo.png" width="80" alt=""><h3 class="d-inline">SMK NEGERI 1 TAKALAR</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              @auth 
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('penerima-beasiswa') ? 'active' : '' }}" href="/penerima-beasiswa">Penerima beasiswa</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    @can('admin')
                    <li><a class="dropdown-item" href="/dashboard">Dashboard admin</a></li>
                    @endcan
                    <li><a class="dropdown-item" href="/my-profile">My profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        {{-- Form Logout --}}
                        <form action="/logout" method="post">
                          @csrf
                          <button class="border-0 dropdown-item" type="submit" onclick="return confirm('Sure you want out?')">Log-out</button>
                        </form>
                        {{-- End form --}}
                    </li>
                  </ul>
                </li>
              @else 
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" aria-current="page" href="/register">Register</a>
                </li>
              @endif
             
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row text-center text-white py-3">

            <div class="col-lg-12">
                <h5>~SELAMAT DATANG DI WEBSITE~</h5>
            </div>

            <hr class="bg-primary mb-3 mt-3">

            <div class="col-lg-12 py-3">
                <h1>RANCANG BANGUN SISTEM PENGAMBILAN KEPUTUSAN PENERIMA BEASISWA DI SMK NEGERI 1 TAKALAR</h1>
            </div>

        </div>
    </div>

</div>