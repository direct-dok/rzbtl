<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
{{--    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">--}}
{{--    <meta name="author" content="elemis">--}}
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="/">
                        <img class="logo-dark" src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" />
                        <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-24 mb-0">Разоблачитель</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link scroll" href="#vidy-podstav">Виды подстав</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link scroll" href="#how-action">Как действовать?</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link scroll" href="#about-project">О проекте</a>
                            </li>
                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link" href="#" data-bs-toggle="dropdown">Blog</a> -->
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
                        <li class="text-white d-none d-lg-block">
                            <a class="text-white" href="mailto:describe@razoblachitel.online">describe@razoblachitel.online</a>
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
    </header>
    <!-- /header -->
@yield('main')
</div>
<!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse mt-5 mt-md-16">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4 text-wrap">© 2022 Razoblachitel.com <br class="d-none d-lg-block" />describe@razoblachitel.online<br class="d-none d-lg-block" />Все права защищены.</p>
                        <!-- <nav class="nav social social-white">
                  <a href="#"><i class="uil uil-twitter"></i></a>
                  <a href="#"><i class="uil uil-facebook-f"></i></a>
                  <a href="#"><i class="uil uil-dribbble"></i></a>
                  <a href="#"><i class="uil uil-instagram"></i></a>
                  <a href="#"><i class="uil uil-youtube"></i></a>
                </nav> -->
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
