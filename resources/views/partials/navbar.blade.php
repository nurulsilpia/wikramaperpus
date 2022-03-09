<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <p class="nav__logo">Perpustakaan Wikrama</p>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list list-unstyled m-0">
                <li class="nav__item"><a href="/" class="nav__link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li class="nav__item"><a href="/ebook" class="nav__link {{ Request::is('ebook*') ? 'active' : '' }}">Ebook</a></li>
                <li class="nav__item"><a href="/profile-perpust" class="nav__link {{ Request::is('profile*') ? 'active' : '' }}">Profile</a></li>
                <li class="nav__item"><a href="/posts" class="nav__link {{ Request::is('posts*') ? 'active' : '' }}">Article</a></li>
                <li class="nav__item"><a href="/galery" class="nav__link {{ Request::is('galery*') ? 'active' : '' }}">Galery</a></li>

                @if (auth()->user())
                    <li class="nav__item"><a href="/sirkulasi" class="nav__link">Sirkulasi</a></li>
                @endif
                
                @auth
                    <li class="nav__item">
                        <div class="dropdown">
                            <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> Hi, {{ auth()->user()->name }}
                            </a>
                        
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @can('admin')
                                <li><a class="dropdown-item" href="/admin">Dashboard Admin</a></li>
                                <div class="dropdown-divider"></div>
                            @endcan

                            <li class="dropdown-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item has-icon text-danger d-flex align-items-center"><i class="bi bi-box-arrow-left"></i> Logout</button>
                                </form>
                            </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav__item"><a href="/login" class="btn btn-primary btn-sm ml-5"><i class="bi bi-box-arrow-right"></i> Login</a></li>
                @endauth
            </ul>
                
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>