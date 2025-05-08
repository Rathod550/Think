<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Document Title
	============================================= -->
	<title>Think - @yield('title')</title>

	<!-- Stylesheets
	============================================= -->
	@include('frontTheme.style')
	@yield('style')


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header
		============================================= -->
		@include('frontTheme.header')
		<!-- #header end -->

		<!-- Include content -->
    	@yield('content')
    	<!-- #Include content end -->

		<!-- Footer
		============================================= -->
		@include('frontTheme.footer')
		<!-- #footer end -->

	</div>
	<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	@include('frontTheme.script')
	@yield('script')

</body>
</html>