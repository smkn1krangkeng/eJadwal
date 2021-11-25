<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-2 pt-1 d-flex">
        <div class="image">
          <img src="{{url('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{auth()->user()->name}}
          </a>
        </div>
      </div>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-2 pt-1 d-flex">
        <div class="image ">
          <img src="{{url('dist/img/gembok.png')}}" class="rounded">
        </div>
        <div class="info">
          <div class="d-block text-light">
            <span class="badge badge-info">  
              Login As {{ Auth::user()->roles()->pluck('name')->implode(',') }}
            </span>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link"> <!-- class="nav-link active" -->
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- menu admin -->
          @hasanyrole('Admin')
            @hasSection('menu_konfig')<li class="nav-item menu-open">@else<li class="nav-item">@endif<!-- class="nav-item menu-open" -->
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs text-danger"></i>
              <p>
                Konfigurasi
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">   
              <li class="nav-item">
              @hasSection('sub_menu_pengguna')<a href="/pengguna" class="nav-link active">@else<a href="/pengguna" class="nav-link">@endif
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
              @hasSection('sub_menu_user')<a href="/user" class="nav-link active">@else<a href="/user" class="nav-link">@endif
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                @hasSection('sub_menu_counters')<a href="/counters" class="nav-link active">@else<a href="/counters" class="nav-link">@endif
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Counters</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasanyrole 
          
          <li class="nav-header">KETERANGAN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Penting</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Konfig</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Isian</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-success"></i>
              <p>Cetak</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>