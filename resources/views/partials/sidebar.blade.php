<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <div class="media">
       <img class=" ml-3 mr-0 mt-3" src="assets/img/logo.png" alt="logo" width="30">
        <div class="media-body">
           <h6 class="mt-4 mr-2 text-dark">Perpustakaan Wikrama</h6>
        </div>
       </div>
      </div>

    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="nav-item dropdown">
          <a href="/" class="nav-link has-dropdown"><i class="bi bi-grid-1x2-fill"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
          <li><a class="nav-link" href="/">Main</a></li>
            <li><a class="nav-link" href="/buku-terbaru">Buku Terbaru</a></li>
            <li><a class="nav-link" href="/buku-terlaris">Buku peminat terbanyak</a></li>
          </ul>
        </li>

        <li class="menu-header">Content</li>
        <li class="nav-item dropdown">
          <a href="/ebook" class="nav-link has-dropdown" data-toggle="dropdown"><i class="bi bi-book-half"></i></i> <span>Ebook</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="/ebook">Buku Novel</a></li>
            <li><a class="nav-link" href="/ebook">Buku Biografi</a></li>
            <li><a class="nav-link" href="/ebook">Buku Pembelajaran</a></li>
            <li><a class="nav-link" href="/ebook">Buku Fiksi</a></li>
            <li><a class="nav-link" href="/ebook">Kamus</a></li>
            <li><a class="nav-link" href="/ebook">Ensiklopedi</a></li>
          </ul>
        </li>
        <li class="menu-header">News</li>
        <li class="nav-item dropdown">
          <a href="/profile-perpust" class="nav-link"><i class="bi bi-person-circle"></i><span>Profile</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/posts" class="nav-link {{ Request::is('/posts') ? 'active' : '' }}"><i class="bi bi-postcard-fill"></i><span>Article</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/galery" class="nav-link"><i class="bi bi-image-fill"></i><span>Galery</span></a>
        </li>

        @if (auth()->user())
          <li class="menu-header">Member</li>
          <li class="nav-item dropdown">
            <a href="/sirkulasi" class="nav-link"><i class="bi bi-arrow-repeat"></i><span>Sirkulasi</span></a>
          </li>
        @endif
        
        @can('admin')
          <li class="menu-header">Administator</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="bi bi-postcard-fill"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="/admin/dashboard">Main</a></li>
              <li><a class="nav-link" href="#">Buku terbaru</a></li>
              <li><a class="nav-link" href="#">Buku peminat terbanyak</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="/profile" class="nav-link"><i class="bi bi-person-circle"></i><span>Profile</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/admin/posts" class="nav-link has-dropdown"><i class="bi bi-postcard-fill"></i><span>Article</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}" href="/admin/posts">Article</a></li>
              <li><a class="nav-link" href="/admin/categories">Category</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><i class="bi bi-folder2"></i><span>Library</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><i class="bi bi-image-fill"></i><span>Galery</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="bi bi-book-half"></i></i><span>Books</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="/admin/books">Data Buku</a></li>
              <li><a class="nav-link" href="#">Kategori Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><i class="bi bi-arrow-repeat"></i><span>Sirkulasi</span></a>
          </li>
        @endcan
      </ul><br><br><br><br>
  </aside>
</div>