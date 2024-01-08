<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nusantara Boarding House</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <link href="{{ asset('/assets/front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/front/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/assets/front/images/logo/kosan.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/assets/front/images/logo/kosan.png') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/DataTables/datatables.css" />

</head>

<body>
    <div class="page-wrapper">

        @include('app.layout.header.front-header')
        @yield('content')
        @include('app.layout.footer.front-footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img
                src="{{ asset('assets/front/images/icons/arrow-up.svg') }}" alt="" title="Go To Top"></span>
    </div>
    <script src="/DataTables/datatables.js"></script>
    <script src="{{ asset('assets/front/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/front/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/front/js/slick.js') }}"></script>
    <script src="{{ asset('assets/front/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/front/js/appear.js') }}"></script>
    <script src="{{ asset('assets/front/js/wow.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom-script.js') }}"></script>
</body>

</html>
