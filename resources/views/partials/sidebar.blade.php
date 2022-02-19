<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <div class="media">
       <img class=" ml-3 mr-0 mt-3" src="assets/img/logo.png" alt="logo" width="30">
        <div class="media-body">
           <h6 class="mt-4 mr-2">Perpustakaan Wikrama</h6>
        </div>
       </div>
      </div>

    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="bi bi-grid-1x2-fill"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="index-0.html">Buku Terbaru</a></li>
            <li><a class="nav-link" href="index.html">Buku Terlaris</a></li>
          </ul>
        </li>

        <li class="menu-header">Content</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="bi bi-book-half"></i></i> <span>Ebook</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Buku Novel</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Buku Biografi</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Buku Pembelajaran</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Buku Fiksi</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Kamus</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Ensiklopedi</a></li>
          </ul>
        </li>
        <li class="menu-header">News</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link"><i class="bi bi-person-circle"></i><span>Profile</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/posts" class="nav-link"><i class="bi bi-postcard-fill"></i><span>Article</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link"><i class="bi bi-image-fill"></i><span>Galery</span></a>
        </li>

        @if (auth()->user())
          <li class="menu-header">Member</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><i class="bi bi-arrow-repeat"></i><span>Sirkulasi</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><i class="bi bi-folder2"></i><span>Library</span></a>
          </li>
        @endif
        
        @can('admin')
          <li class="menu-header">Administator</li>
          <li class="nav-item dropdown">
            <a href="/profile" class="nav-link"><i class="bi bi-book-half"></i></i><span>Ebook</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i><span>Profile</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/admin/posts" class="nav-link"><i class="bi bi-postcard-fill"></i><span>Article</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/profile" class="nav-link"><i class="bi bi-folder2"></i><span>Library</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/profile" class="nav-link"><i class="bi bi-image-fill"></i><span>Galery</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/profile" class="nav-link"><i class="bi bi-arrow-repeat"></i><span>Sirkulasi</span></a>
          </li>
        @endcan
      </ul>
  </aside>
</div>