<aside class="main-sidebar sidebar-primary elevation-4 bg-light">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light text-danger">Olshop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('products.index')}}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Barang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Lihat Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Tambah Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('product-galleries.index')}}" class="nav-link">
              <i class="nav-icon fas fa-file-image"></i>
              <p>
                Foto Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('product-galleries.index')}}" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Lihat Foto Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product-galleries.create')}}" class="nav-link">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Tambah Foto Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('transaction.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('transaction.index')}}" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Lihat Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>