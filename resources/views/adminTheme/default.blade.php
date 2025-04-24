<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Think - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        @keyframes blink {
          0% { opacity: 1; }
          50% { opacity: 0; }
          100% { opacity: 1; }
        }

        .blink {
          animation: blink 1s infinite;
        }
    </style>

    @include('adminTheme.style')
    @yield('style')

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
    @include('adminTheme.script')
    @yield('script')

    @include('adminTheme.alert')
</body>
</html>
