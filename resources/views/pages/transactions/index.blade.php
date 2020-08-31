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
            <h1 class="m-0 text-dark">Daftar Transaksi</h1>
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
                <h3 class="card-title">Tabel Daftar Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>   
                      <th>Email</th>
                      <th>No hp</th>
                      <th>Alamat</th>
                      <th>Total Transaksi</th>
                      <th>Status Transaksi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($items as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->number}}</td>
                      <td>{{$item->address}}</td>
                      <td>${{$item->transaction_total}}</td>
                      <td>
                        @if($item->transaction_status == 'PENDING')
                        <span class="badge badge-info">
                        @elseif($item->transaction_status == 'SUCCES')
                        <span class="badge badge-success">
                        @elseif($item->transaction_status == 'FAILED')
                        <span class="badge badge-warning">
                        @else
                        <span>
                        @endif
                        {{$item->transaction_status}}
                        </span>
                      </td>
                      <td>
                      @if($item->transaction_status == 'PENDING')
                      <a href="{{ route('transactions.status', $item->id) }}?status=SUCCES" class="btn btn-success btn-sm">
                              <i class="fa fa-check"></i>
                            </a>
                            <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-sm">
                              <i class="fa fa-times"></i>
                            </a>
                      @endif
                      <a href="#mymodal"
                            data-remote="{{ route('transaction.show', $item->id) }}"
                            data-toggle="modal"
                            data-target="#mymodal"
                            data-title="Detail Transaksi {{ $item->uuid }}"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{route('transaction.edit', $item->id)}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{route('transaction.destroy', $item->id)}}" method="post" class="d-inline">
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
      </div>
    </div>
    </div>
  @endsection

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('includes.footer')

