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
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link @if($mode=='list') active @endif" wire:click="$set('mode', 'list')" id="nav-list-tab" data-toggle="tab" href="#nav-list" role="tab" aria-controls="nav-list" aria-selected="@if($mode=='list') true @else false @endif" >List</a>
      <a class="nav-item nav-link @if($mode=='add') active @endif" wire:click="$set('mode', 'add')" id="nav-add-tab" data-toggle="tab" href="#nav-add" role="tab" aria-controls="nav-add" aria-selected="@if($mode=='add') true @else false @endif">Add User</a>
      <a class="nav-item nav-link @if($mode=='edit') active @endif" wire:click="$set('mode', 'edit')" id="nav-edit-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-edit" aria-selected="@if($mode=='edit') true @else false @endif">Update User</a>
    </div>
  </nav>
  <div class="tab-content mt-4" id="nav-tabContent">
    <div class="tab-pane fade @if($mode=='list') show active @endif" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
      @include('livewire.users.users-index')
    </div>
    <div class="tab-pane fade @if($mode=='add') show active @endif" id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
      @include('livewire.users.users-create')
    </div>
    <div class="tab-pane fade @if($mode=='edit') show active @endif" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">
      @include('livewire.users.users-edit')
    </div>
  </div>
</div>