@section('judul_hal','Login')
@push('css')
<style>
body {
  background: url("{{url('img/background.png')}}") top left / 100px repeat;
  transform-origin: top;
}
</style>
<link rel="stylesheet" href="{{url('plugins/toastr/toastr.css')}}">
@endpush
<div class="card card-outline card-primary">
  @push('scripts')
  <script src="{{url('plugins/toastr/toastr.min.js')}}"></script>
  <script>
    @if(session()->has('loginError'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.error("{{ session('loginError') }}");
    @endif
  </script>
  @endpush
    <div class="card-header text-center">
    <img src="{{url('img/logo2.png')}}" alt="eJadwal" class="" style="width:70px; height:70px">
    </div>
    <div class="card-body">
        <form wire:submit.prevent="login">
          @csrf
        <div class="input-group mb-3">
            <input type="email" wire:model="email" name="email" id="email" class="form-control" placeholder="Email" 
            autofocus value="{{ old('email') }}">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" wire:model="password" name="password" id="password" class="form-control" placeholder="Password">
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
            <div class="col-12 text-center mt-3">
            <a href="{{url('/')}}" class="stretched-link">Back to Home</a>
            </div>
            <!-- /.col -->
        </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
