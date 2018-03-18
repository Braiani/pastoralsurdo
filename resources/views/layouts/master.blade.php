<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('/img/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{setting('site.title')}} @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('/css/paper-kit.css?v=2.1.0')}}" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/css/demo.css')}}" rel="stylesheet" />
    
    {{--  Toastr CSS file  --}}
    @toastr_css

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/css/nucleo-icons.css')}}" rel="stylesheet">

</head>
<body>
    @include('layouts.partials.navbar')
    @yield('page-header')
    
    <div class="main">
        @yield('content')
        {{--  <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">MISSÃO</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    <br>
                    <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>
                </div>
            </div>
            <br/><br/>
            <div class="row">
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-album-2"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Beautiful Gallery</h4>
                            <p class="description">Spend your time generating new ideas. You don't have to think of implementing.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-bulb-63"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">New Ideas</h4>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-chart-bar-32"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Statistics</h4>
                            <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-sun-fog-29"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Delightful design</h4>
                            <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section section-dark text-center">
        <div class="container">
            <h2 class="title">Let's talk about us</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar"><img src="{{asset('/img/faces/clem-onojeghuo-3.jpg')}}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Henry Ford</h4>
                                    <h6 class="card-category">Product Manager</h6>
                                </div>
                            </a>
                            <p class="card-description text-center">
                            Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar"><img src="{{asset('/img/faces/joe-gardner-2.jpg')}}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Sophie West</h4>
                                    <h6 class="card-category">Designer</h6>
                                </div>
                            </a>
                            <p class="card-description text-center">
                            A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar"><img src="{{asset('/img/faces/erik-lucatero-2.jpg')}}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Robert Orben</h4>
                                    <h6 class="card-category">Developer</h6>
                                </div>
                            </a>
                            <p class="card-description text-center">
                            The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

        
    </div>
	@include('layouts.partials.footer')
</body>

<!-- Core JS Files -->
<script src="{{asset('/js/jquery-3.2.1.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="{{asset('/js/paper-kit.js?v=2.1.0')}}"></script>

{{--  Toastr files  --}}
@toastr_js
@toastr_render

</html>
