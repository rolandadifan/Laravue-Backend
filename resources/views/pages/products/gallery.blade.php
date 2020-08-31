@include('includes.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('includes.navbar')
  <!-- /.navbar -->
  <!-- sidebar -->
  @include('includes.sidebar')
  <!-- /.sidebar -->
  <!-- Main content -->
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Foto Barang <small>{{$product->name}}</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <div class="row ml-3 mr-3">
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Daftar Foto Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Barang</th>
                      <th>Foto</th>
                      <th>Default</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>
                          <img src="{{ url($item->photo) }}" alt="" />
                        </td>
                        <td>{{ $item->is_default ? 'Ya' : 'Tidak' }}</td>
                        <td>
                          <form action="{{ route('product-galleries.destroy', $item->id) }}" 
                                method="post" 
                                class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('includes.footer')

