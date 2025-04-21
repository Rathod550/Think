<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>KY INFOTECH - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Include other styles -->
    @include('adminTheme.style')
    @yield('style')
    <!-- Include Toastr.css -->

    <!-- Bootstrap and other libraries -->
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Nov 17 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
    <!-- Include header -->
    @include('adminTheme.header')

    <!-- Include sidebar -->
    @include('adminTheme.sidebar')

    <!-- Include content -->
    @yield('content')

    <!-- Include footer -->
    @include('adminTheme.footer')

    <!-- Back to top button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Include scripts -->
    @include('adminTheme.script')

    @yield('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>

    <!-- Include Toastr.js -->

    <!-- Include custom alerts -->
    @include('adminTheme.alert')
</body>
</html>
