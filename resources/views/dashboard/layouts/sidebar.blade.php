 <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo" style="margin-left: auto; margin-right: auto;">
                        <a href="/dashboard"><img src="assets/images/logo/logo.jpg" style="width: 100px; height: 100px !important; padding: 0;" class="masthead-avatar img-thumbnail rounded-circle" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                    
                    <li
                        class="sidebar-item {{ Request::is('dashboard') ? 'active' : ''}} ">
                        <a href="/dashboard" class='sidebar-link'>
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li
                        class="sidebar-item {{ Request::is('lapor') ? 'active' : ''}} ">
                        <a href="/lapor" class='sidebar-link'>
                            <i class="fas fa-user-clock"></i>
                            <span>Warga Wajib Lapor</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item {{ Request::is('layanan') ? 'active' : ''}} ">
                        <a href="/layanan" class='sidebar-link'>
                            <i class="fas fa-file-contract"></i>
                            <span>Layanan</span>
                        </a>
                    </li>

                    {{-- <li class="sidebar-title">Jenis Layanan</li>

                    <li
                        class="sidebar-item  has-sub ">
                        <a href="#" class='sidebar-link'>
                            <i class="far fa-envelope"></i>
                            <span>Surat Keterangan</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item has-sub">
                                <a href="#">Surat Keterangan</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Surat Keterangan Tidak Mampu</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Surat Keterangan Pindah</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Surat Keterangan Mati</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Surat Keterangan Belum menikah </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Surat Keterangan Tidak Memiliki Rumah </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="#" class='sidebar-link'>
                            <i class="far fa-envelope"></i>
                            <span>Surat Domisili</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="#" class='sidebar-link'>
                            <i class="far fa-envelope"></i>
                            <span>Surat Kuasa Waris</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="#" class='sidebar-link'>
                            <i class="far fa-envelope"></i>
                            <span>Surat Pernyataan Usaha</span>
                        </a>
                    </li> --}}

                    <li class="sidebar-title">Account</li>

                    <li
                        class="sidebar-item  ">
                        <a href="#" class='sidebar-link'>
                            <i class="far fa-user"></i>
                            <span>Akun</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item  ">
                        <a href="#" class='sidebar-link'>
                            <i class="fas fa-key"></i>
                            <span>Reset Password</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item  {{ Request::is('/') ? 'active' : ''}}">
                        <a href="/" class='sidebar-link'>
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                    
                </ul>     
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
     </div>