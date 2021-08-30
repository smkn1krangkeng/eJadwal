@extends('layout.backend.main')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush
@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- table setting -->
<script>
  $(function () {
    $('#users-table').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": true,
      "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
      "searching": true,
      "ordering": true,
      "autoWidth": false,
      "responsive": true,
      "columnDefs": [
        { "orderable": false, "targets": [4,5] },
        { "searchable": false, "targets": 5 }
      ]
    });
  });
</script>
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
            <div class="card card-outline card-dark">
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
                <div class="divider bg-dark rounded mb-4">
                  <a class="btn btn-success m-2" href="/pengguna/export" role="button" data-toggle="tooltip" data-placement="top" title="Export to Excel">
                  <i class="fas fa-file-excel"></i>
                  </a>
                </div>
              {{ $users_count }}
              @php
                  $no = 1;
              @endphp
              <table id="users-table" class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Permissions</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $r)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{$r->name}}</td>
                    <td>{{$r->email}}</td>
                    <td>
                      @foreach(($r->roles) as $roles) 
                      {{$roles->name}} 
                      @endforeach
                    </td>
                    <td>
                      @foreach(($r->permissions) as $permis) 
                      {{$permis->name}} 
                      @endforeach
                    </td>
                    <td>
                      <a class="btn btn-primary mx-2" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Edit Data">
                      <i class="fas fa-edit"></i>
                      </a>
                      <a class="btn btn-danger mx-2" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Delete Data">
                      <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
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