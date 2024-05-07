<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{ asset ('AdminLTE/') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PERPUSTAKAAN</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset ('AdminLTE/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">WAHYU NADYA PUTRI</a>
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
                <a href="/Dashboard" class="nav-link {{ request()->is('Dashboard') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Transaksi</li>
            <li class="nav-item">
                <a href="/Pinjaman" class="nav-link {{ request()->is('Pinjaman') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Pinjaman</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/Pengembalian" class="nav-link {{ request()->is('pengembalian') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>pengembalian</p>
                </a>
            </li>
            <li class="nav-header">Data Master</li>
            <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Master Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/Buku" class="nav-link {{ request()->is('Buku') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Kategori" class="nav-link {{ request()->is('Kategori') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./Rak" class="nav-link {{ request()->is('Rak') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rak</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">Setting</li>
            <li class="nav-item">
                <a href="/Users" class="nav-link {{ request()->is('Users') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->