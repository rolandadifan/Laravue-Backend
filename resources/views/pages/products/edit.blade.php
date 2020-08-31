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
            <h1 class="m-0 text-dark">Ubah Barang <small>{{$item->name}}</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <form action="{{route('products.update' , $item->id)}}" method="post">
    @method('put')
    @csrf
    <div class="form-group ml-3 mr-5">
            <label for="name" class="form-control-label">Nama Barang</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') ?  old('name')  : $item->name}}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
  <div class="form-group ml-3 mr-5">
            <label for="type" class="form-control-label">Tipe Barang</label>
            <input  type="text"
                    name="type" 
                    value="{{ old('type') ?  old('type')  : $item->type}}" 
                    class="form-control @error('type') is-invalid @enderror"/>
            @error('type') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group ml-3 mr-5">
            <label for="description" class="form-control-label">Deskripsi Barang</label>
            <textarea name="description" 
                      class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description}}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group ml-3 mr-5">
            <label for="price" class="form-control-label">Harga Barang</label>
            <input  type="text"
                    name="price" 
                    value="{{ old('price') ?  old('price') : $item->price}}" 
                    class="form-control @error('price') is-invalid @enderror"/>
            @error('price') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group ml-3 mr-5">
            <label for="quantity" class="form-control-label">Kuantitas Barang</label>
            <input  type="text"
                    name="quantity" 
                    value="{{ old('quantity') ?  old('quanitity')  : $item->quantity}}" 
                    class="form-control @error('quantity') is-invalid @enderror"/>
            @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group my-5">
  <button type="submit" class="btn btn-primary ml-3 mr-5">Ubah</button>
  </div>
</form>
  
  @endsection

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('includes.footer')

