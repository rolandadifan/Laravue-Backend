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
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Transaksi <small>{{$item->name}}</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <form action="{{route('transaction.update' , $item->id)}}" method="post">
    @method('put')
    @csrf
    <div class="form-group ml-3 mr-5">
            <label for="name" class="form-control-label">email</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') ?  old('name')  : $item->name}}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    <div class="form-group ml-3 mr-5">
            <label for="email" class="form-control-label">email</label>
            <input  type="text"
                    name="email" 
                    value="{{ old('email') ?  old('email')  : $item->email}}" 
                    class="form-control @error('email') is-invalid @enderror"/>
            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
  <div class="form-group ml-3 mr-5">
            <label for="number" class="form-control-label">No HP</label>
            <input  type="number"
                    name="number" 
                    value="{{ old('number') ?  old('number')  : $item->number}}" 
                    class="form-control @error('number') is-invalid @enderror"/>
            @error('number') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group ml-3 mr-5">
            <label for="address" class="form-control-label">Alamat</label>
            <input  type="text"
                    name="address" 
                    value="{{ old('address') ?  old('address') : $item->address}}" 
                    class="form-control @error('address') is-invalid @enderror"/>
            @error('address') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group my-5">
  <button type="submit" class="btn btn-primary ml-3 mr-5">Ubah</button>
  </div>
</form>
  
  @endsection

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('includes.footer')

