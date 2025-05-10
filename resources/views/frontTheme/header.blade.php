<header id="header" class="full-header" data-menu-padding="27" data-sticky-menu-padding="19">
	<div id="header-wrap">
		<div class="container">
			<div class="header-row">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('frontTheme/images/logo-dark.png') }}"><img src="{{ asset('frontTheme/images/logo.png') }}" alt="Canvas Logo"></a>
					<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('frontTheme/images/logo-dark@2x.png') }}"><img src="{{ asset('frontTheme/images/logo@2x.png') }}" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

				<div class="header-misc">

					<!-- Top Search
					============================================= -->
					<div class="header-misc-icon">
						<select class="form-control languageSelect">
							<option value="value_english" {{ session('language') == 'value_english' ? 'selected' : '' }}>English</option>
                            <option value="value_hindi" {{ session('language') == 'value_hindi' ? 'selected' : '' }}>Hindi</option>
                            <option value="value_gujrati" {{ session('language') == 'value_gujrati' ? 'selected' : '' }}>Gujrati</option>
						</select>
					</div>
					<!-- #top-search end -->

				</div>

				<div id="primary-menu-trigger">
					<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
				</div>

				<!-- Primary Navigation
				============================================= -->
				<nav class="primary-menu style-5">

					<ul class="menu-container">
						<li class="menu-item">
							<a class="menu-link  {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}"><div><i class="icon-home2"></i>Home</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link  {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('aboutUs') }}"><div><i class="icon-line-users"></i>About Us</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link  {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ route('contactUs') }}"><div><i class="icon-line-phone-call"></i>Contact Us</div></a>
						</li>
					</ul>

				</nav><!-- #primary-menu end -->

				<form class="top-search-form" action="search.html" method="get">
					<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
				</form>

			</div>
		</div>
	</div>
	<div class="header-wrap-clone"></div>
</header>