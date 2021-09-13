<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SiCakep</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css"> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="{{ asset('/css/si_cakep.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->
    
    <!-- select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <!-- <link rel="stylesheet" href="/path/to/select2.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <style>
        *{
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="bg-default">
    <div class="sidebar open shadow-sm">
        <div class="logo-details mt-4">
            <i class='bx bx-book-alt'></i>
            <span class="logo_name">SiCakep</span>
        </div>
        <ul class="nav-links">
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>
            <li class="{{ request()->is('penduduk') || request()->is('penduduk/*') ? 'active' : '' }}">
                <div class="iocn-link">
                    <a href="{{ route('penduduk') }}">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Penduduk</span>
                    </a>
                </div>
            </li>
            <li class="{{ request()->is('penduduk-lahir') || request()->is('penduduk-lahir/*') ? 'active showMenu' : '' }}">
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-contact'></i>
                        <span class="link_name">Mutasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li class="">
                        <a href="#">Penduduk Meninggal</a>
                    </li>
                    <li class="{{ request()->is('penduduk-lahir') || request()->is('penduduk-lahir/*') ? 'active' : '' }}">
                        <a href="{{ route('penduduk-lahir') }}">Penduduk Lahir</a>
                    </li>
                    <li>
                        <a href="#">Penduduk Pindah</a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('keluarga') || request()->is('keluarga/*') ? 'active' : '' }}">
                <div class="iocn-link">
                    <a href="{{ route('keluarga') }}">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Keluarga</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-copy-alt' ></i>
                        <span class="link_name">Laporan</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Plugins</a></li>
                    <li><a href="#">UI Face</a></li>
                    <li><a href="#">Pigments</a></li>
                    <li><a href="#">Box Icons</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="{{ asset('/img/profile.png') }}" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Fikri Firdaus</div>
                        <div class="job">Web Developer</div>
                    </div>
                    <i class='bx bx-log-out' id="logout"></i>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="bg-white p-3 shadow-sm position-sticky">
            <img src="{{ asset('img/suncode.png') }}" class="d-inline" height="32px" alt="">
            <h5 class="d-inline align-middle">Suncode</h5>
        </div>
        <div class="bg-light py-2 px-3 shadow-sm">
            <span class="mx-2">{{ $main }}</span>
            <span class="text-muted" style="font-size: 13px">/ {{ $sub}}</span>
            <!-- <span class="text-muted" style="font-size: 14px;">penduduk</span> -->
        </div>
        <div class="container mt-4 px-4 overflow-scroll">
            @yield('content')
        </div>
    </section>
</body>

<script>
    $("#logout").on("click", function() {
        Swal.fire({
            title: 'Logout',
            text: "Apakah kamu ingin keluar dari aplikasi?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: `Tidak`,
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/logout";
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.select-nik').select2({
            theme: 'bootstrap4',
        });
        
        $('.select-input').select2({
            theme: 'bootstrap4',
        });
    });
</script>

<script src="{{ asset('/js/script.js') }}"></script>
@include('sweetalert::alert')
</html>