@push('css')
@endpush
@push('scripts')
@endpush
@section('judul_hal','Counters')
@section('card-title','Counters')
@section('header_hal')
<li class="breadcrumb-item"><a href="#">Konfigurasi</a></li>
<li class="breadcrumb-item active">Counters</li>
@endsection
<div>
<div class="divider bg-dark rounded mb-4">
    <button wire:click="increment" class="btn btn-success my-2 ml-2" data-toggle="tooltip" data-placement="top" title="Increment">
    +
    </button>
  </div>
    <h1>{{ $count }}</h1>
</div>
