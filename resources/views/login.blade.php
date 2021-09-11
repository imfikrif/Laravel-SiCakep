<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    
    <title>Login</title>
    <style>
        *{
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 h-full p-4 shadow">
                <h1 class="text-danger mt-5">SiCakep</h1>
                <h5 class="mt-5">Login</h5>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="my-3">Selamat datang kembali</p>
                <form method="POST" action="{{ route('auth-login') }}">
                    @csrf
                    <div class="container-fluid bg-light p-0 mt-4 shadow-sm">
                        <div class="login-input-text p-3">
                            <label class="d-block">NIK</label>
                            <input type="text" name="nik" class="no-border bg-light" placeholder="Masukan NIK">
                        </div>
                        <div class="login-input-text py-2 px-3">
                            <label class="d-block">Password</label>
                            <input type="password" name="password" class="no-border bg-light" placeholder="Masukan password">
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="submit" name="submit" class="btn-login" value="Masuk">
                    </div>
                    <!-- <img src="{{ asset('/img/logo-telkom.png') }}" height="60px" class="mt-3"> -->
                </form>
            </div>

            <div class="col-md-9 d-md-block d-none h-full bg-login">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>