<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    @auth
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in few min ago</div>
        <div class="dropdown-divider"></div>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="dropdown-item has-icon text-danger d-flex align-items-center"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
      </div>
    </li>
    @else
    <li>
      <div class="dropdown-menu dropdown-menu-right">
        <li class="bg-light p-2 rounded"><a href="/login" class="p-2"><i class="bi bi-box-arrow-in-right"></i> login</a></li>
      </div>
    </li>
    @endauth
  </ul>
</nav>