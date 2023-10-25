<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Penerima beasiswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/calon-penerima*') ? 'active' : '' }}" href="/dashboard/calon-penerima">
            <span data-feather="users"></span>
            Calon penerima
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/matriks-keputusan*') ? 'active' : '' }}" href="/dashboard/matriks-keputusan">
            <span data-feather="file"></span>
           Data matriks keputusan
          </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  {{ Request::is('dashboard/kriteria*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Kriteria
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item  {{ Request::is('dashboard/kriteria-penilaian*') ? 'active' : '' }}" href="/dashboard/kriteria-penilaian">Nilai rata-rata rapor</a></li>
              <li><a class="dropdown-item  {{ Request::is('dashboard/kriteria-perilaku*') ? 'active' : '' }}" href="/dashboard/kriteria-perilaku">Perilaku</a></li>
              <li><a class="dropdown-item  {{ Request::is('dashboard/kriteria-absensi*') ? 'active' : '' }}" href="/dashboard/kriteria-absensi">Absensi kehadiran</a></li>
              <li><a class="dropdown-item  {{ Request::is('dashboard/kriteria-prestasi*') ? 'active' : '' }}" href="/dashboard/kriteria-prestasi">Prestasi akademik</a></li>
          </li>
      </ul>
    </div>
  </nav>