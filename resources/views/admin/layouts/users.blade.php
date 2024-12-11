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
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admire/vendors/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admire/css/pages/dataTables.bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('admire/css/pages/tables.css') }}" />
    <!--End of plugin styles-->


    <link rel="stylesheet" href="{{ asset('admire/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admire/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admire/css/skins/mint_black_skin.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Niramit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('admire/css/pages/layouts.css')}} " />
</head>

<body class="fixedMenu_header navbar-fixed-header">
<div class="preloader" style="position:fixed;
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
  background-position: center;z-index: 999999">
        <img src="{{ asset('loader.gif') }}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top" class="fixed">
        <!-- .navbar -->
        @include('admin.layouts.navbar')
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        @include('admin/layouts/left')
        <!-- /#left -->
        <div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg">
                        <h4 class="nav_top_align" style="font-family:'Chakra Petch', sans-serif;">
                        <i class="fa fa-pencil"></i>
                        ผู้ใช้ระบบ
                    </h4>
                    </div>
                    <div class="col-lg">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align" style="font-family:'Chakra Petch', sans-serif;">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> หน้าหลัก
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">ผู้ใช้ระบบ</a>
                            </li>
                            <li class="breadcrumb-item active">ตั้งค่าโปรไฟล์</li>
                        </ol>
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
<script src="{{ asset('admire/vendors/select2/js/select2.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/jquery.dataTables.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/dataTables.bootstrap.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/dataTables.responsive.min.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/dataTables.buttons.min.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/buttons.colVis.min.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/buttons.html5.min.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/buttons.bootstrap.min.js') }}""></script>
<script src="{{ asset('admire/vendors/datatables/js/buttons.print.min.js') }}""></script>
<!--  plugin scripts -->
<script src="{{ asset('admire/js/pluginjs/jasny-bootstrap.js')}}"></script>
<script src="{{ asset('admire/vendors/holderjs/js/holder.js')}}"></script>
<script src="{{ asset('admire/vendors/bootstrapvalidator/js/bootstrapValidator.min.js/')}}"></script>
<!--end of plugin scripts-->
<script src="{{ asset('admin/js/validation.js') }}"></script>
<script src="{{ asset('admire/js/pages/users.js') }}"></script>
<script src="{{ asset('admire/js/pages/fixed_menu.js')}} "></script>

</body>
</html>

<script type="text/javascript">
    $.extend(true, $.fn.dataTable.defaults, {
        "lengthMenu": [[100, 250, 500, 1000, -1], [100, 250, 500, 1000, "All"]],
        "pageLength": 100  // Set default page length to 100
    });


