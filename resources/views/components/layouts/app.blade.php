<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link data-navigate-track rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link data-navigate-track href="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link data-navigate-track href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link data-navigate-track href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link data-navigate-track href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link data-navigate-track href="{{ asset('backend/assets/css/pace.min.css" rel="stylesheet') }}" />
    <script data-navigate-track src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link data-navigate-track href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link data-navigate-track href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
    <link data-navigate-track href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" data-navigate-track href="{{ asset('backend/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" data-navigate-track href="{{ asset('backend/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" data-navigate-track href="{{ asset('backend/assets/css/header-colors.css') }}" />

    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        <!--sidebar wrapper -->
        <x-admin.partials.sidebar/>
        <!--end sidebar wrapper -->
        <!--start header -->
        <x-admin.partials.header/>
        <!--end header -->

        {{$slot}}
        
        <x-admin.partials.footer/>
        

        
    </div>
    <!--end wrapper-->

    

    @livewireScripts
    <script data-navigate-once src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script data-navigate-once src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script data-navigate-once src="{{ asset('backend/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
    <script data-navigate-once>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script data-navigate-once src="{{ asset('backend/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script data-navigate-once src="{{ asset('backend/assets/js/app.js') }}"></script>
</body>

</html>
