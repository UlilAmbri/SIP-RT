<!-- Topbar -->
<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">
    <!-- Topbar Navbar -->
    <ul class="ml-auto navbar-nav">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 text-primary d-none d-lg-inline small">Nama Admin</span>
                <div class="img-profile rounded-circle text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                </div>
            </a>
            <!-- Dropdown - User Information -->
            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="{{ route('admin.logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="mr-2 text-danger fas fa-sign-out-alt fa-sm fa-fw"></i>
                    Logout
                </a>
                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                    @csrf
                </form>
            </div>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                            @csrf
                        </form>
    
                </div>
            </div>
        </div>
    </div>

        </li>

    </ul>

</nav>
<!-- End of Topbar -->