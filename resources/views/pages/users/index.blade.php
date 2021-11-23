@extends('layout.backend.main')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/toastr/toastr.css')}}">
@endpush
@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- toastr -->
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
  @if(Session::has('success'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
  	toastr.success("{{ session('success') }}");
  @endif
</script>
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
@endpush
@section('judul_hal','User')
@section('header_hal')
<li class="breadcrumb-item"><a href="#">Konfigurasi</a></li>
<li class="breadcrumb-item active">User</li>
@endsection
<!-- main menu sidebar -->
@section('menu_konfig') 
<li class="nav-item menu-open">
@endsection
<!-- sub menu sidebar -->
@section('menu_user')
<a href="/user" class="nav-link active">
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
                  User
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
                @livewire('users')
              </div><!-- /.card-body -->
            </div><!-- /.card -->
          </section><!-- /.Left col -->
        </div><!-- /.row (main row) -->
@endsection