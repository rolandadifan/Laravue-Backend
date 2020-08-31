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
            <h1 class="m-0 text-dark">Daftar Barang</h1>
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
                <h3 class="card-title">Tabel Daftar Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($items as $itm)
                    <tr>
                      <td>{{$itm->id}}</td>
                      <td>{{$itm->name}}</td>
                      <td>{{$itm->type}}</td>
                      <td>${{$itm->price}}</td>
                      <td>{{$itm->quantity}}</td>
                      <td>
                        <a href="{{route('products.gallery', $itm->id)}}" class="btn btn-info btn-sm">
                            <i class="fa fa-picture-o"></i>
                        </a>
                        <a href="{{route('products.edit', $itm->id)}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{route('products.destroy', $itm->id)}}" method="post" class="d-inline">
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
                        <td colspan="6" class="text-center p-5">Data tidak tersedia</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  @endsection

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('includes.footer')

