<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/core-img/logo2.png') }}" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Pastoral do Surdo Nacional</a></li>
                            @foreach ($pages as $page)
                                <li>
                                    <a href="{{ route('pagina', $page->slug) }}"><i class="nc-icon nc-tap-01"></i>{{ $page->title }}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{ route('galeria.index') }}">Galeira</a>
                            </li>
                            <li>
                                <a href="{{ route('contato') }}"><i class="nc-icon nc-email-85"></i>Contato</a>
                            </li>
                            <li>
                                <a rel="tooltip" title="Siga-nos no Twitter" data-placement="bottom" href="{{setting('social.twitter')}}" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                    <p class="d-lg-none">Twitter</p>
                                </a>
                            </li>
                            <li>
                                <a rel="tooltip" title="Curta nossa página no Facebook" data-placement="bottom" href="{{setting('social.facebook')}}" target="_blank">
                                    <i class="fa fa-facebook-square"></i>
                                    <p class="d-lg-none">Facebook</p>
                                </a>
                            </li>
                            <li>
                                <a rel="tooltip" title="Siga-nos no Instagram" data-placement="bottom" href="{{setting('social.instagram')}}" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                    <p class="d-lg-none">Instagram</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>