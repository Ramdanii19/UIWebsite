  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/') ? 'active' : '' }}" href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/siswa') ? 'active' : '' }}" href="/siswa">
          <i class="bi bi-person-fill"></i>
          <span>Data Siswa</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/petugas') ? 'active' : '' }}" href="/petugas">
          <i class="bi bi-person-badge-fill"></i>
          <span>Data Petugas</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/kelas') ? 'active' : '' }}" href="/kelas">
          <i class="bi bi-clipboard"></i>
          <span>Data Kelas</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/spp') ? 'active' : '' }}" href="/spp">
          <i class="ri-clipboard-line"></i>
          <span>Data SPP</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/pembayaran') ? 'active' : '' }}" href="/pembayaran">
          <i class="ri-shopping-cart-line"></i>
          <span>Pembayaran</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/history') ? 'active' : '' }}" href="/history">
          <i class="ri-file-history-line"></i>
          <span>History Pembayaran</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('/laporan') ? 'active' : '' }}" href="/laporan">
          <i class="ri-clipboard-line"></i>
          <span>Generate Laporan</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- End Components Nav -->

      <!-- End Forms Nav -->

      <!-- End Tables Nav -->

      <!-- End Charts Nav -->

      <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- End F.A.Q Page Nav -->

      <!-- End Contact Page Nav -->

      <!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
      <!-- End Login Page Nav -->

      <!-- End Error 404 Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->