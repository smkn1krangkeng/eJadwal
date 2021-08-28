@extends('layout.frontend.main')
@section('judul_hal','Home')
@push('css')
@endpush
@push('scripts')
<script>
$(document).ready(function() {
  $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
      $(".alert-dismissible").alert('close');
  });
});
</script>
@endpush
@section('login_form')
@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('loginError')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card card-outline card-primary">
        <div class="card-header text-center">
        <a href="#" class="h1">
        <img src="{{url('img/logo2.png')}}" alt="eJadwal" class="" style="width:70px; height:70px">
        </a>
        </div>
        <div class="card-body">
          <form action="/login" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" 
              autofocus required value="{{ old('email') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
@endsection