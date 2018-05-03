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
