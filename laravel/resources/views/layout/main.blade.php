<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integity="sha384-ggOyR0iXbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "snonymouse">
    <title>@yield('title')</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="Container">
            <a href="#" class="navbar-brand">Navbar</a>
            <button class="navbar-toggler" type ="button" data-toggle="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expand="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ url('/') }}"> Home</a>
                    <a class="nav-item nav-link " href="{{ url('/about') }}">About</a>
                    <a class="nav-item nav-link " href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                    <a class="nav-item nav-link " href="{{ url('/students') }}">Students</a>
                </div>
            </div>
        </div>
    </nav>

@yield('container')

<!-- Optional lavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap 3S -->
<script src="https://code.jquery.com/jquery-3.3.1.s1im.min.js" integrity="sha384-q8i/X+9650z0OrT7abK41JStOIAqVgRVzpbzo5smXKOYfRo48abtrE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-002eT0(pHqdS3Q6h3ty5KVphtPhzWj9W01c1HTMGa3JDZwrnQq4sF86dIHNDz0w1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.cce/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-3jSmVgyd0p3pXB1rRibZUAYony6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</body>
</html>