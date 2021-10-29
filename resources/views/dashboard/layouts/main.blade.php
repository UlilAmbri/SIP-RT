<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP-RT | Dashboard User</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
     <div id="app">
        @include('dashboard.layouts.sidebar')
        <div id="main" class='layout-navbar'>
            @include('dashboard.layouts.header')

            <div id="main-content">
            @yield('container')
        </div>
        

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>Copyright &copy; Sistem Informasi Pelayanan Rukun Tetangga (SIP-RT) 2021</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">Ulil Ambri</a></p>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

            </div>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="/assets/js/mazer.js"></script>
</body>

</html>