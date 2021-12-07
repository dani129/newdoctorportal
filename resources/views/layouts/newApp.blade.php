<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Medinova - Health & Medical HTML Template"/>
<meta name="keywords" content="clinic, coronavirus, corporate, dental, dentist, doctor, hospital, medical,"/>
<meta name="author" content="ThemeMascot"/>

<!-- Page Title -->
<title>Medinova - Health & Medical HTML Template</title>

<!-- Favicon and Touch Icons -->
<link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/javascript-plugins-bundle.css')}}" rel="stylesheet"/>

<!-- CSS | menuzord megamenu skins -->
<link href="{{asset('js/menuzord/css/menuzord.css')}}" rel="stylesheet"/>

<!-- CSS | Main style file -->
<link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
<link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>

<!-- CSS | Responsive media queries -->
<link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- CSS | Theme Color -->
<link href="{{asset('css/colors/theme-skin-color-set1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/javascript-plugins-bundle.js')}}"></script>
<script src="{{asset('js/menuzord/js/menuzord.js')}}"></script>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{asset('js/revolution-slider/css/rs6.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('js/revolution-slider/extra-rev-slider1.css')}}">
<!-- REVOLUTION LAYERS STYLES -->
<!-- REVOLUTION JS FILES -->
<script src="{{asset('js/revolution-slider/js/revolution.tools.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/js/rs6.min.js')}}"></script>
<script src="{{asset('js/revolution-slider/extra-rev-slider1.js')}}"></script>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="container-1340px has-side-panel side-panel-right">
   @yield('preloader')
   @yield('header')
   @yield('content')
   @yield('footer')
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>