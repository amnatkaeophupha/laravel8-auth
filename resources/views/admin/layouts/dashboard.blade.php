<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default Title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img_admin/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('img_admin/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('img_admin/favicon//favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img_admin/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('img_admin/favicon/site.webmanifest') }}" />

    <!--global styles-->
    <link rel="stylesheet" href="{{ asset('admire/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admire/css/custom.css') }}" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="{{ asset('admire/vendors/chartist/css/chartist.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admire/vendors/circliful/css/jquery.circliful.css') }}">
    <link rel="stylesheet" href="{{ asset('admire/css/pages/index.css') }}">
    <link rel="stylesheet" href="{{ asset('admire/css/skins/mint_black_skin.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Niramit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>

        #sale_realtime
        {
            width:100%;
            height: 267px;
        }
        #pie
        {
            width:100%;
            height: 400px;
        }
        #barmonth
        {
            width:100%;
            height: 400px;
        }
        #baryear
        {
            width:100%;
            height: 400px;
        }
    </style>

</head>

<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{ asset('loader.gif') }}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        @include('admin.layouts.navbar')
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        @include('admin/layouts/left')
        <!-- /#left -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="m-t-5">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </h4>
                        </div>
                    </div>
                </div>
            </header>
            @yield('content')
            <!-- /#content -->
        </div>
    </div>
    <!--wrapper-->
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script src="{{ asset('admire/js/components.js') }}"></script>
<script src="{{ asset('admire/js/custom.js') }}"></script>
<!--end of global scripts-->
<!--  plugin scripts -->
<script src="{{ asset('admire/vendors/countUp.js/js/countUp.min.js') }}"></script>
<script src="{{ asset('admire/vendors/flip/js/jquery.flip.min.js') }}"></script>
<script src="{{ asset('admire/js/pluginjs/jquery.sparkline.js') }}"></script>
<script src="{{ asset('admire/vendors/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('admire/js/pluginjs/chartist-tooltip.js') }}"></script>
<script src="{{ asset('admire/vendors/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('admire/vendors/circliful/js/jquery.circliful.min.js') }}"></script>
<script src="{{ asset('admire/vendors/flotchart/js/jquery.flot.js') }}" ></script>
<script src="{{ asset('admire/vendors/flotchart/js/jquery.flot.resize.js') }}"></script>
<!--end of plugin scripts-->

<script src="{{ asset('admire/js/pages/index.js') }}"></script>


</body>
</html>
