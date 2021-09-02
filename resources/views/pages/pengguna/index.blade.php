@extends('layout.backend.main')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
      "order": [[ 1, "asc" ]],
      "columnDefs": [
        { "orderable": false, "targets": [0,5,6] },
        { "searchable": false, "targets": [6] }
      ]
    });
  });
</script>
<!-- checbox multi -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });

    });
</script>
<script>
    $(document).ready(function() {
        $("button").click(function(){
            var ids = [];
            $.each($("input[name='userids']:checked"), function(){
                ids.push($(this).val());
            });
            var x = ids.join(",");
            document.getElementById("checkids").value = x;
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
                  <form action="{{ route('pengguna.delall') }}" method="post" class="d-inline mx-1">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="checkids" name="userids">
                    <button type="submit" id="delallbtn" class="btn btn-danger">Delete Selected</button>
                  </form>
                </div>
                @php
                    $no = 1;
                @endphp
                <table id="users-table" class="table table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col"><input type="checkbox" id="master"></th>
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
                      <td><input type="checkbox" class="sub_chk" name="userids" value="{{$r->id}}"></td>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{$r->name}}</td>
                      <td>{{$r->email}}</td>
                      <td>
                        {{$r->roles->pluck('name')->implode(',')}} 
                      </td>
                      <td>
                        {{$r->permissions->pluck('name')->implode(',')}} 
                      </td>
                      <td>
                        <form action="{{ route('pengguna.edit', $r->id) }}" method="post" class="d-inline mx-1" id="edituser">
                          @csrf
                          @method('PUT')
                              <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </form>
                        <form action="{{ route('pengguna.del', $r->id) }}" method="post" class="d-inline mx-1" id="deluser">
                          @csrf
                          @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
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