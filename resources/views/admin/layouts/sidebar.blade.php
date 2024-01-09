<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SobatSehat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dashboard/lokasi')}}" class="nav-link {{ Request::is('dashboard/lokasi', 'dashboard/lokasi/create', 'dashboard/lokasi/edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Lokasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dashboard/kategori')}}" class="nav-link {{ Request::is('dashboard/kategori', 'dashboard/kategori/create', 'dashboard/kategori/edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dashboard/kegiatan')}}" class="nav-link {{ Request::is('dashboard/kegiatan', 'dashboard/kegiatan/create', 'dashboard/kegiatan/edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dashboard/berita')}}" class="nav-link {{ Request::is('dashboard/berita', 'dashboard/berita/create', 'dashboard/berita/edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-header">Authentication</li>
          <li class="nav-item">
            <a href="{{url('dashboard/user')}}" class="nav-link {{ Request::is('dashboard/user', 'dashboard/user/create', 'dashboard/user/edit') ? 'active' : '' }}">
              <i class="nav-icon far fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
