<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form action="/logout" method="post" id="logout">
        @csrf
          <a class="nav-link" href="#" onclick="document.getElementById('logout').submit()">
            <i class="fas fa-sign-out-alt"></i>
            Sign Out
          </a>
        </form>
      </li>
    </ul>
  </nav>