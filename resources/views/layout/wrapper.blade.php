<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Font awasome --}}
    <linkpopular rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/4c58b7f284.js" crossorigin="anonymous"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- Costom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/global.style.css') }}">
    @yield('styles')
    @yield('head-scripts')
    @yield('headers')
</head>

<body>
    {{-- Header --}}
    <div class="container-fluid">
        <div class="container-sm nav-top">
            <nav class="navbar navbar-dark">
                <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261613/Universe%20Of%20Hero/Resource/logo-heroo.png"
                    alt="logo" class="logo-hero" />
                <div class="search-form col-lg-4">
                    <form class="d-flex top-form">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261613/Universe%20Of%20Hero/Resource/user.png"
                            alt="search" class="search-icon" />
                    </form>
                </div>
            </nav>
        </div>
    </div>

    {{-- navbar --}}
    <div class="container-fluid nav-area">
        <div class="container-sm area-container-sm">

            <div class="nav-navbar navbar navbar-expand-sm ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="search-form-mob">
                        <form class="d-flex top-form">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261613/Universe%20Of%20Hero/Resource/user.png"
                                alt="search" class="search-icon" />
                        </form>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('web.home') }}"
                                    class="btn btn-secondary btn-set {{ $active == 'home' ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('web.comic') }}"
                                    class="btn btn-secondary btn-set {{ $active == 'comic' ? 'active' : '' }}">Comic</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('web.about') }}"
                                    class="btn btn-secondary btn-set {{ $active == 'about' ? 'active' : '' }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('web.donate') }}"
                                    class="btn btn-secondary btn-set {{ $active == 'donate' ? 'active' : '' }}">Donate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </nav>
        </div>
    </div>
    {{-- end navbar --}}
    @yield('content')

    {{-- footer --}}
    <div class="container-fluid footerr ">
        <div class="empty-area">&nbsp;</div>
        <div class="text-white">
            <div class="py-3">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item">
                        <a href="/index.html" class="nav-link px-2 text-muted">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/menuComic.html" class="nav-link px-2 text-muted">Comic</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about.html" class="nav-link px-2 text-muted">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/donate.html" class="nav-link px-2 text-muted">Donate</a>
                    </li>
                </ul>
                <p class="text-center text-muted">&copy; 2022 Universe Of Hero</p>
            </div>
        </div>
    </div>
    {{-- end footerr --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @yield('body-scripts')
</body>

</html>
