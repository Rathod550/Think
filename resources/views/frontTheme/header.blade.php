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
							<a class="menu-link  {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}"><div><i class="icon-home2"></i>
								@if(session('language') == 'value_english')
				                    Home
				                @elseif(session('language') == 'value_hindi')
				                    घर
				                @elseif(session('language') == 'value_gujrati')
				                    ઘર
				                @endif
							</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link {{ Request::is('categories*') ? 'active' : '' }}" href="#"><div><i class="icon-line-grid"></i>
								@if(session('language') == 'value_english')
				                    Category
				                @elseif(session('language') == 'value_hindi')
				                    वर्ग
				                @elseif(session('language') == 'value_gujrati')
				                    શ્રેણી
				                @endif
							</div></a>
							<ul class="sub-menu-container">
								@if(!empty($blogCategorys) && $blogCategorys->count() > 0)
									@foreach($blogCategorys as $key => $value)
										<li class="menu-item">
											<a class="menu-link" href="{{ route('categories', [$value->slug]) }}">
												<div>
													@if(session('language') == 'value_english')
								                        {{ $value->name }}
								                    @elseif(session('language') == 'value_hindi')
								                        {{ $value->name_hindi }}
								                    @elseif(session('language') == 'value_gujrati')
								                        {{ $value->name_gujrati }}
								                    @endif
												</div>
											</a>
										</li>
									@endforeach
								@endif
							</ul>
						</li>
						<li class="menu-item">
							<a class="menu-link  {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('aboutUs') }}"><div><i class="icon-line-users"></i>
								@if(session('language') == 'value_english')
			                        About Us
			                    @elseif(session('language') == 'value_hindi')
			                        हमारे बारे में
			                    @elseif(session('language') == 'value_gujrati')
			                        અમારા વિશે
			                    @endif
							</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link  {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ route('contactUs') }}"><div><i class="icon-line-phone-call"></i>
								@if(session('language') == 'value_english')
		                            Contact Us
		                        @elseif(session('language') == 'value_hindi')
		                            हमसे संपर्क करें
		                        @elseif(session('language') == 'value_gujrati')
		                            અમારો સંપર્ક કરો
		                        @endif
							</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link  {{ Request::is('terms-and-conditions') ? 'active' : '' }}" href="{{ route('terms.and.conditions') }}"><div><i class="icon-files"></i>
								@if(session('language') == 'value_english')
					                Terms And Conditions
					            @elseif(session('language') == 'value_hindi')
					                नियम और शर्तें
					            @elseif(session('language') == 'value_gujrati')
					                નિયમો અને શરતો
					            @endif
							</div></a>
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