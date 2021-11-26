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
</script>
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
@section('menu_konfig','on')
@section('sub_menu_user','on')
@section('judul_hal','Users')
@section('card-title','Users')
@section('header_hal')
<li class="breadcrumb-item"><a href="#">Konfigurasi</a></li>
<li class="breadcrumb-item active">Users</li>
@endsection
<div>
  <div class="divider bg-dark rounded mb-4">
    <button wire:click="create" class="btn btn-success my-2 ml-2" data-toggle="tooltip" data-placement="top" title="Add User">
    Add User
    </button>
    <button class="btn btn-success my-2 ml-2" data-toggle="tooltip" data-placement="top" title="Export Users to Excel">
    Export
    </button>
    <button class="btn btn-warning my-2 ml-2" data-toggle="tooltip" data-placement="top" title="Import Users from Excel">
      Import
    </button>
    <button class="btn btn-primary my-2 ml-2" data-toggle="tooltip" data-placement="top" title="Add/Edit User Roles & Permissions">
      Roles & Permissions
    </button>
    <button class="btn btn-danger my-2 ml-2" data-toggle="tooltip" data-placement="top" title="Delete Users Selection">
      Delete Selection
    </button>
  </div>
  @if($isAction=='read')
    @include('livewire.users.users-index')
  @elseif($isAction=='create')
    @include('livewire.users.users-create')
  @endif
</div>