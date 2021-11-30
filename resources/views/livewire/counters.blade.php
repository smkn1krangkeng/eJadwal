@push('css')
@endpush
@push('scripts')
@endpush
@section('menu_konfig','on')
@section('sub_menu_counters','on')
@section('judul_hal','Counters')
@section('card-title','Counters')
@section('header_hal')
<li class="breadcrumb-item"><a href="#">Konfigurasi</a></li>
<li class="breadcrumb-item active">Counters</li>
@endsection
<div>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Store</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      @foreach($hasil as $row)
      Nilai {{ $row }}<br>
      @endforeach
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <form wire:submit.prevent="store">
        @csrf
        <label>Nilai:</label>
        <input wire:model='nilai' name="nilai" />
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
