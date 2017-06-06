<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ elixir( '/css/app.css' ) }}">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		{{-- <link rel="stylesheet" type="text/css" href="css/flags32.css"> --}}
		<link rel="stylesheet" type="text/css" href="/css/flags16.css">
	</head>
	<body>
		<div id="wrapper" class="aff-QQ288">
			<header>
				<nav class="navbar navbar-default navbar-custom">
					<div id="topNavbar">
						<div class="container">
							<ul id="navbarTop" class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="standard">Country</span><span class="caret"></span></a>
									<ul class="dropdown-menu">
									    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							            	<li class="{{  $localeCode == LaravelLocalization::getCurrentLocale() ? "active" : '' }}">
									            <a rel="alternate" hreflang="{{ $localeCode }}" data-value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									            	@if( $properties['native'] == "Bahasa Indonesia") <i class="flag flag-id"></i>
									            	@elseif( $properties['native'] == "Bahasa Melayu") <i class="flag flag-my"></i>
									            	@elseif( $properties['native'] == "Tiếng Việt") <i class="flag flag-vn"></i>
									            	@elseif( $properties['native'] == "ไทย") <i class="flag flag-th"></i>
									            	@elseif( $properties['native'] == "简体中文") <i class="flag flag-cn"></i>
									            	@else <i class="flag flag-gb"></i>
									            	@endif
									            </a>
									        </li>
									    @endforeach
									</ul>
								</li>
							</ul>
						</div>
					</div> 
					<div id="headerNavbar">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#af-navbar-collapse" >
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="#" class="pull-left navbar-brand"><img src="../images/logo/QQ288.png" class="img-responsive"></a>
							</div>
						</div>
					</div>
					<div id="mainNavbar">
						<div class="container">
							<div class="row">
								<div id="af-navbar-collapse" class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li><a href="/" class="active">{{ trans('language.menu.Home') }}</a></li>
										<li><a href="/{{ trans('language.url.about') }}">{{ trans('language.menu.About') }}</a></li>
										<li><a href="#">{{ trans('language.menu.Contact') }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</header>
			<div id="aff-box">
				@yield('content')
			</div>
			<footer class="text-center">
				<div class="footer-socket"></div>
				<div class="footer-copyright">
					<p>Copyright&copy; All Right Reserve</p>
				</div>
			</footer>
		</div>
		<script src="/js/app.js"></script>
		<script src="/js/custom.js"></script>
	</body>
</html>