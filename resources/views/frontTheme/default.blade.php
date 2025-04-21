<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>KYINFOTECH | @yield('title')</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Agency Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="megakit" />

  @include('frontTheme.style')
  @yield('style')

</head>

<body>

<!-- Header Start -->
@include('frontTheme.header')
<!-- Header Close -->

<!-- Include content -->
@yield('content')


<!-- Footer Start -->
@include('frontTheme.footer')
<!-- Footer Close -->


<!-- 
Essential Scripts
=====================================-->
@include('frontTheme.script')

</body>

</html>
