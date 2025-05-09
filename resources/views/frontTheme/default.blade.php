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

	<style type="text/css">
		.active{
			color:#1ABC9C;
		}
		.margin-force-close {
            margin: 0px !important;
        }
	</style>


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

	<script type="text/javascript">
		document.getElementById('languageSelect').addEventListener('change', function () {
	        const selectedLang = this.value;
	        const segments = window.location.pathname.split('/').filter(Boolean);

	        // Replace current locale with new one
	        if (['en', 'hi', 'gu'].includes(segments[0])) {
	            segments[0] = selectedLang;
	        } else {
	            segments.unshift(selectedLang); // If no locale in path
	        }

	        const newPath = '/' + segments.join('/');
	        window.location.href = newPath;
	    });
	</script>

</body>
</html>