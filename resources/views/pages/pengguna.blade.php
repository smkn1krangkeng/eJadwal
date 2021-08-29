@extends('layout.backend.main')
@push('css')
@endpush
@push('scripts')
@endpush
@section('judul_hal','Pengguna')
@section('header_hal')
<li class="breadcrumb-item"><a href="#">Konfigurasi</a></li>
<li class="breadcrumb-item active">Pengguna</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Pengguna
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
              @php
                  $no = 1;
              @endphp
              <table class="table table-sm table-bordered table-hover">
                <thead class="bg-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $r)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{$r->name}}</td>
                    <td>{{$r->email}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
@endsection