<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font-Awesome -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Lightbox -->
	<link href="{{ asset('assets/lightbox/css/lightbox.css') }}" rel="stylesheet">
    <!-- Text Rotator-->
	<link href="{{ asset('assets/textrotator/simpletextrotator.css') }}" rel="stylesheet">
	<!-- FlexSlider -->
    <link href="{{ asset('assets/flexslider/flexslider.css') }}" rel="stylesheet">
	<!-- Theme Style -->
    <link  href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Animations -->
    <link  href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" /> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/html5shiv/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/respond/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    @yield('content')
</body>
</html>