<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <div class="media">
        <div class="media-body">
           <h6 class="mt-4 mr-2 text-dark">Perpustakaan Wikrama</h6>
        </div>
       </div>
      </div>

    <ul class="sidebar-menu">
        @can('admin')
          <li class="menu-header">Administator</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="bi bi-postcard-fill"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="#">Main</a></li>
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
            <a href="/admin/galery" class="nav-link"><i class="bi bi-image-fill"></i><span>Galery</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="bi bi-book-half"></i></i><span>Books</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="/admin/books">Data Buku</a></li>
              <li><a class="nav-link" href="/admin/category-books">Kategori Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><i class="bi bi-arrow-repeat"></i><span>Sirkulasi</span></a>
          </li>
        @endcan
      </ul>
  </aside>
</div>