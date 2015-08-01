<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{env('MAIN_NAME')}}</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/justVector.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body >
	
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}"> <img src="/images/logo.png" alt=""> {{env('MAIN_NAME')}}</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!-- 				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul> -->

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<!-- <li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li> -->
						<li><a href="{{ url('/contact') }}"> <span class="glyphicon glyphicon-envelope"></span> {{trans('about.contact')}}</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<!-- carrusel -->

	<div id="myCarousel" class="carousel container slide">
	<div class="carousel-inner">
	        <div class="active item one"></div>
	        <div class="item two"></div>
	        <div class="item three"></div>
	</div>
	</div>

<!-- end carrusel -->
	
	@yield('content')

	<footer class=" footer"> 
        <div class="container">


            <ol class="breadcrumb">
              
              <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> {{trans('home.home')}}</a></li>
              <li><a href="{{ url('/contact') }}"><span class="glyphicon glyphicon-envelope"></span> {{trans('about.contact')}}</a></li>
              <li><a href="{{env('FACEBOOK')}}" target="_blank"><span class="jv-facebook_alt"></span> Facebook</a></li>
              <li><a href="{{env('TWITTER')}}" target="_blank"><span class="jv-twitter_alt"></span>Twitter</a></li>
              <li class="pull-right hidden-xs"><a href="#top"><span class="glyphicon glyphicon-arrow-up"></span> {{trans('home.go_to_top')}}</a></li>
            </ol>

        </div>

     </footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		  $(document).ready(function() {
		    $('.carousel').carousel({interval: 7000});
		  });
	</script>
</body>
</html>
