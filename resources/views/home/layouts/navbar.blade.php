<!-- Navigation-->
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav" style="background-color: #c0c0c0;">
    <div class="container">
        <a class="navbar-brand text-dark" href="/">Sistem Informasi Pelayanan RT (SIP-RT)</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/layanan">Jenis Layanan</a></li>
                <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/about">About</a></li>
                <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/signup">Sign Up</a></li>
                {{-- @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul>
                                <li><a class="dropdown-item" href="#">My Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    @else --}}
                        <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Login</a></li>
                {{-- @endauth --}}
                
            </ul>
        </div>
    </div>
</nav>