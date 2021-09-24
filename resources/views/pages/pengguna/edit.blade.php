@extends('layout.backend.main')
@push('css')
<link rel="stylesheet" href="{{url('plugins/toastr/toastr.css')}}">
@endpush
@push('scripts')
<script src="{{url('plugins/toastr/toastr.min.js')}}"></script>
<script>
  @if(Session::has('error'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
  	toastr.error("{{ session('error') }}");
  @endif
</script>
@endpush
@section('judul_hal','Edit Pengguna')
@section('header_hal')
<li class="breadcrumb-item"><a href="#">Konfigurasi</a></li>
<li class="breadcrumb-item"><a href="/pengguna">Pengguna</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection
<!-- main menu sidebar -->
@section('menu_konfig') 
<li class="nav-item menu-open">
@endsection
<!-- sub menu sidebar -->
@section('menu_pengguna')
<a href="/pengguna" class="nav-link active">
@endsection

@section('konten')  
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title">
                  Edit Pengguna
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{$user->name}}"class="form-control" id="name" placeholder="Name ...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" value="{{$user->email}}"class="form-control" id="email" placeholder="Email ...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" placeholder="Password ...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{$user->roles->pluck('name')->implode(',')}}" class="form-control" id="roles" placeholder="Roles ...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="permission" class="col-sm-2 col-form-label">Permission</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{$user->permissions->pluck('name')->implode(',')}}" class="form-control" id="permission" placeholder="Permission ...">
                    </div>
                </div>
                  <a href="/pengguna" class="btn btn-default ">Cancel</a>
                  <button type="submit" class="btn btn-info float-right ">Update</button>
              </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
@endsection