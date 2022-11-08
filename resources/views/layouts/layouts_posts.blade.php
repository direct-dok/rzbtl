<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    {{--    <meta name="author" content="elemis">--}}
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="/">
                        <img src="/assets/img/logo.png" srcset="/assets/img/logo@2x.png 2x" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">Разоблачитель</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/#vidy-podstav">Виды подстав</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#how-action">Как действовать?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#about-project">О проекте</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('posts.all') }}">Статьи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contacts">Контакты</a>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <!-- <a class="nav-link" href="#" data-bs-toggle="dropdown">Blocks</a> -->
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <!-- <a class="nav-link" href="#" data-bs-toggle="dropdown">Documentation</a> -->
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="mailto:mailto:describe@razoblachitel.online" class="link-inverse">describe@razoblachitel.online</a>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="d-none d-lg-block">
                            <a class="text-navy nav-link" href="mailto:describe@razoblachitel.online">describe@razoblachitel.online</a>
                        </li>
                        <li class="nav-item d-lg-none"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
        <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
            <div class="offcanvas-header">
                <h3 class="text-white fs-24 mb-0">Контакты</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pb-6">
                <div class="widget mb-8">
                    <p>Присылайте видео и фото автоподстав нам на почту</p>
                </div>
                <!-- /.widget -->
                <div class="widget mb-8">
                    <h4 class="widget-title text-white mb-3">Email:</h4>
                    <a href="mailto:describe@razoblachitel.online">describe@razoblachitel.online</a>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.offcanvas-body -->
        </div>
        <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
            <div class="container d-flex flex-row py-6">
                <form class="search-form w-100">
                    <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
                </form>
                <!-- /.search-form -->
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    @yield('content')
</div>
<!-- /.content-wrapper -->
@include('layouts.include.footer')
</body>

</html>
