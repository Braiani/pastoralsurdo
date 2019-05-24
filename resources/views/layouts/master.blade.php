<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ setting('site.title') }} | @stack('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="img/png" href="{{ asset('img/core-img/logo2.png') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">

    <!-- Toastr CSS file -->
    @toastr_css

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/core-img/logo2.png') }}" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="{{ route('noticias.search') }}" method="get">
                                    <input type="search" name="texto" class="form-control" placeholder="Pesquisar">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    @include('layouts.partials.navbar')
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">

</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="row">
                    @yield('content')
                </div>
                @yield('content-above')
            </div>

            {{--<div class="col-12 col-md-6 col-lg-4 mb-3">
                --}}{{--<!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Finance</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>--}}{{--

                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    <h4>Notícias</h4>
                    <p>Cadastre seu e-mail abaixo e seja notificado sempre que sair uma novidade.</p>
                    <form action="#" method="post">
                        <input type="text" name="text" placeholder="Nome completo">
                        <input type="email" name="email" placeholder="E-mail">
                        <button type="submit" class="btn w-100">Cadastrar</button>
                    </form>
                </div>
            </div>--}}
        </div>
    </div>
</div>
<!-- ##### Featured Post Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/core-img/logo2.png') }}" alt=""></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:{{ setting('contato.email') }}">{{ setting('contato.email') }}</a></li>
                            <li><a href="tel:{{ setting('contato.tel') }}">{{ setting('contato.tel') }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-8">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Missão</h4>
                        <!-- List -->
                        <ul class="list">
                            <li>
                                <a>
                                    A Pastoral do Surdo é uma ação da Igreja Católica que tem como princípio e fundamentação no próprio projeto de vida e da pessoa de Jesus Cristo
                                    relatada
                                    no texto de Marcos 7, 32-35.
                                </a>
                            </li>
                            <li>
                                <a>
                                    Anunciar Jesus Cristo às Comunidades de Surdos, presentes nos Regionais do Brasil através dos agentes de evangelização (catequistas e
                                    coordenadores);
                                </a>
                            </li>
                            <li>
                                <a>
                                    Possibilitar aos surdos um espaço dentro da Igreja Católica, assumindo diversos serviços e de ministérios;
                                </a>
                            </li>
                            <li>
                                <a>
                                    Dar testemunho de vida cristã dentro da Comunidade, buscando eliminar o preconceito, o individualismo e a discriminação, presente ainda hoje nas
                                    famílias, nas escolas, no mundo do trabalho e nas Igrejas;
                                </a>
                            </li>
                            <li>
                                <a>
                                    Conhecer os meios de comunicação do surdo, particularmente a LIBRAS (Língua Brasileira de Sinais), instrumento e mediação do diálogo com os
                                    outros e com Deus;
                                </a>
                            </li>
                            <li>
                                <a>
                                    Respeitar a identidade e a cultura dos surdos brasileiros e de outras comunidades de surdos do mundo, a fim de valorizar a vida e todas as suas
                                    potencialidades.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    @include('layouts.partials.footer')
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>
<!--  Toastr files  -->
@toastr_js
@toastr_render
 <!-- Custom JS -->
@stack('js')
</body>

</html>