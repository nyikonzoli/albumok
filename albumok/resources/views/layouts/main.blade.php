<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    @yield('header')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-top: 0px">
        <div class="container-fluid" style="background-color: yellow;">
            <a class="navbar-brand" href="#">Top 10</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link active" aria-current="page" href="#">Albumok</a>
                </div>
                <div class="d-flex" style="margin: 0.5rem">
                    <button class="btn" type="submit" style="border-color:black">Bejelentkezés</button>
                    <button class="btn" type="submit" style="border-color:black; background-color: black; color:white; margin-left: 2rem">Regisztráció</button>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>