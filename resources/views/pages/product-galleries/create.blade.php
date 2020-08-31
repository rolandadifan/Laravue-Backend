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
            <h1 class="m-0 text-dark">Tambah Foto Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <form action="{{route('product-galleries.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group ml-3 mr-5">
            <label for="name" class="form-control-label">Nama Barang</label>
            <select name="products_id"
                    class="form-control @error('products_id') is-invalid @enderror">
                @foreach ($products as $product)
                  <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group ml-3 mr-5">
            <label for="photo" class="form-control-label">Foto Barang</label>
            <input  type="file"
                    name="photo" 
                    value="{{ old('photo') }}" 
                    accept="image/*"
                    required
                    class="form-control @error('photo') is-invalid @enderror"/>
            @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group ml-3 mr-5">
          <label for="is_default" class="form-control-label">Jadikan Default</label>
            <br>
            <label>
              <input  type="radio"
                    name="is_default" 
                    value="1" 
                    class="form-control @error('is_default') is-invalid @enderror"/> Ya
            </label>
            &nbsp;
            <label>
              <input  type="radio"
                    name="is_default" 
                    value="0" 
                    class="form-control @error('is_default') is-invalid @enderror"/> Tidak
            </label>
            @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group my-5">
  <button type="submit" class="btn btn-primary ml-3 mr-5">Tambah Barang</button>
  </div>
</form>
  
  @endsection

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('includes.footer')

