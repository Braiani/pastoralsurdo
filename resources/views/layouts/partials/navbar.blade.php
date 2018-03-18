<nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{url('/')}}">Pastoral do Surdo Nacional</a>
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
                @foreach ($pages as $page)
                    <li class="nav-item">
                        <a href="/pagina/{{$page->slug}}" class="nav-link"><i class="nc-icon nc-tap-01"></i>{{ $page->title }}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a href="/contato" class="nav-link"><i class="nc-icon nc-tap-01"></i>Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Siga-nos no Twitter" data-placement="bottom" href="{{setting('social.twitter')}}" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Curta nossa página no Facebook" data-placement="bottom" href="{{setting('social.facebook')}}" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Siga-nos no Instagram" data-placement="bottom" href="{{setting('social.instagram')}}" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>