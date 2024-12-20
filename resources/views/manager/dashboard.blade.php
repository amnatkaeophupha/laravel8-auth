<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</title>
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
    <link rel="stylesheet" href="{{ asset('admire/css/skins/mint_skin.css')}}"/>
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
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand mr-0" href="index.html">
                    <h4 class="text-white" style="font-family: 'Sarabun', sans-serif;">
                    <img src="{{ asset('img_admin/aru_logo.png') }}" class="admin_img" alt="logo"> มรภอย.
                    </h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="navbar-toggleable-sm m-lg-auto d-none d-lg-flex top_menu" id="nav-content">
                    <ul class="nav navbar-nav flex-row top_menubar">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_inbox.html">
                                <i class="fa fa-inbox"></i> <span class="quick_text">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_compose.html">
                                <i class="fa fa fa-edit"></i> <span class="quick_text">Compose</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="maps.html">
                                <i class="fa fa-map-marker"></i> <span class="quick_text">Maps</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery.html">
                                <i class="fa fa-picture-o"></i> <span class="quick_text">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav dropdown-menu-right ml-auto">
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                <span class="badge badge-warning">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-header">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong> meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong> upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>hally</strong> sent you an image.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong>Meri</strong> invitation for party.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>Remo</strong> meeting details .
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <strong>David</strong> upcoming events list.
                                                <br>
                                                <small>add to timeline</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox.html">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <span class="badge badge-danger">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-header">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong> business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong> meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong> Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>clay</strong> business propasals
                                                <br>
                                                <small class="primary_txt">20min Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>John</strong> meeting at Ritz
                                                <br>
                                                <small class="primary_txt">2hrs Back.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Luicy</strong> Request Invitation
                                                <br>
                                                <small class="primary_txt">Yesterday.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Remo</strong> sent you an image
                                                <br>
                                                <small class="primary_txt">just now.</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group" style="font-family:'Chakra Petch', sans-serif;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{ asset('img_admin/avatar_admin.png')}}" class="admin_img2 rounded-circle avatar-img" alt="avatar">
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admire Admin</div>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i> User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>
                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="{{ url('auth/signout') }}"><i class="fa fa-sign-out"></i>Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="media user-media">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="img/admin.jpg">
                            <p class="text-white user-info">Welcome Micheal</p>
                        </a>
                        <div class="search_bar col-lg-12">
                            <div class="input-group">
                                <input type="search" class="form-control " placeholder="search">
                                <span class="input-group-append">
                                    <button class="btn" type="button"><span class="fa fa-search" >
                                    </span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #menu -->
                <ul id="menu">
                    <li>
                        <a href="index1.html">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="index.html">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 2

                                </span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Components</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="general_components.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; General Components
                                </a>
                            </li>
                            <li>
                                <a href="cards.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp;Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Transitions
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Buttons
                                </a>
                            </li>
                            <li>
                                <a href="icons.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Icons
                                </a>
                            </li>
                            <li>
                                <a href="tooltips.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Tooltips
                                </a>
                            </li>
                            <li>
                                <a href="animations.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Animations
                                </a>
                            </li>
                            <li>
                                <a href="sliders.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sliders
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Notifications
                                </a>
                            </li>
                            <li>
                                <a href="p_notify.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; P-Notify
                                </a>
                            </li>
                            <li>
                                <a href="izitoast.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Izi-Toast
                                </a>
                            </li>
                            <li>
                                <a href="cropper.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Cropper
                                </a>
                            </li>
                            <li>
                                <a href="file_upload.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; File Upload
                                </a>
                            </li>
                            <li>
                                <a href="jstree.html">
                                    <i class="fa fa-angle-right"></i> &nbsp;Js Tree
                                </a>
                            </li>
                            <li>
                                <a href="modal.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Modals
                                </a>
                            </li>
                            <li>
                                <a href="sortable.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sortable
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sweet alerts
                                </a>
                            </li>
                            <li>
                                <a href="grids_layout.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Grid View
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Widgets</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="widgets1.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Widgets 1
                                </a>
                            </li>
                            <li>
                                <a href="widgets2.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Widgets 2
                                </a>
                            </li>
                            <li>
                                <a href="widgets3.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Widgets 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title menu_hide">&nbsp; Forms</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkbox.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datetime_picker.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Date Time Picker
                                </a>
                            </li>
                            <li>
                                <a href="ratings.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Ratings
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Tables</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Simple Data Tables </span>
                                </a>
                            </li>
                            <li>
                                <a href="datatables.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-bar-chart"></i>
                            <span class="link-title menu_hide">&nbsp; Charts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Advanced Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartist.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Chartist
                                </a>
                            </li>
                            <li>
                                <a href="rickshaw.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Rickshaw Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Users</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; User Grid
                                </a>
                            </li>
                            <li>
                                <a href="add_user.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Add User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; User Profile
                                </a>
                            </li>
                            <li>
                                <a href="delete_user.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Delete User
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title menu_hide">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-picture-o"></i>
                            <span class="link-title menu_hide">&nbsp; Galleries</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="gallery.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Gallery
                                </a>
                            </li>
                            <li>
                                <a href="video_gallery.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Video Gallery
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="link-title menu_hide">&nbsp; Email</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="mail_compose.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Compose
                                </a>
                            </li>
                            <li>
                                <a href="mail_inbox.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Inbox
                                </a>
                            </li>
                            <li>
                                <a href="mail_view.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; View
                                </a>
                            </li>
                            <li>
                                <a href="mail_sent.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Sent
                                </a>
                            </li>
                            <li>
                                <a href="mail_spam.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Spam
                                </a>
                            </li>
                            <li>
                                <a href="mail_draft.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Draft
                                </a>
                            </li>
                            <li>
                                <a href="mail_trash.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Trash
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span class="link-title menu_hide">&nbsp; Maps</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="jqvmaps.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Vector Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp; Pages</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; 404
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; 500
                                </a>
                            </li>
                            <li>
                                <a href="login1.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Login 1
                                </a>
                            </li>
                            <li>
                                <a href="login2.html">
                                    <i class="fa fa-angle-right"></i> &nbsp;
                                    <span class="link-title">&nbsp;Login 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="login3.html">
                                    <i class="fa fa-angle-right"></i> &nbsp;
                                    <span class="link-title">&nbsp;Login 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="register1.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Register 1
                                </a>
                            </li>
                            <li>
                                <a href="register2.html">
                                    <i class="fa fa-angle-right"></i> &nbsp;
                                    <span class="link-title">&nbsp;Register 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="register3.html">
                                    <i class="fa fa-angle-right"></i> &nbsp;
                                    <span class="link-title">&nbsp;Register 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Lock Screen 1
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen2.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Lock Screen 2
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen3.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Lock Screen 3
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Invoice
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Layouts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu-boxed.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar.html">
                                    <i class="fa fa-angle-right"></i> &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i> &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i> &nbsp;Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i> &nbsp;Level 1
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i> &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i> &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
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
            <div class="outer">
                <div class="inner bg-container">


                    <!--top section widgets-->
                    <div class="row widget_countup">
                        <div class="col-12 col-sm-6 col-xl-3">

                            <div id="top_widget1">
                                <div class="front">
                                    <div class="bg-primary p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="user_font">Users</div>
                                        <div id="widget_countup1">3,250</div>
                                        <div class="tag-white">
                                            <span id="percent_count1">85</span>%
                                        </div>
                                        <div class="previous_font">Yearly Users stats</div>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5">
                                                <i class="fa fa-users text-primary"></i>
                                            </div>
                                            <div id="widget_countup12">3,250</div>
                                            <div>Users</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="visitsspark-chart" class="spark_line"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3 media_max_573">
                            <div id="top_widget2">
                                <div class="front">
                                    <div class="bg-success p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="user_font">Sales</div>
                                        <div id="widget_countup2">1,140</div>
                                        <div class="tag-white">
                                            <span id="percent_count2">60</span>%
                                        </div>
                                        <div class="previous_font">Sales per month</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div id="widget_countup22">1,140</div>
                                            <div>Sales</div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="salesspark-chart" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget3">
                                <div class="front">
                                    <div class="bg-warning p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="user_font">Comments</div>
                                        <div id="widget_countup3">85</div>
                                        <div class="tag-white ">
                                            <span id="percent_count3">30</span>%
                                        </div>
                                        <div class="previous_font">Monthly comments</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-warning">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                            <div id="widget_countup32">85</div>
                                            <div>Comments</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="mousespeed" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget4">
                                <div class="front">
                                    <div class="bg-danger p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="user_font">Rating</div>
                                        <div id="widget_countup4">8</div>
                                        <div class="tag-white">
                                            <span id="percent_count4">80</span>%
                                        </div>
                                        <div class="previous_font">This month ratings </div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white section_border b_r_5">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-danger">
                                                <i class="fa fa-star-o"></i>
                                            </div>

                                            <div id="widget_countup42">8</div>
                                            <div>Rating</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="rating" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row m-t-35">
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <span class="card-title">Today Stats</span>
                                    <div class="dropdown chart_drop float-right">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                        <i class="fa fa-arrows-alt"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="demo-chartist mb-md m-t-15" id="chart1"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 m-t-35">
                            <div class="bg-white section_border circliful_section">
                                <div class="tab-content text-center">
                                    <div  class="tab-pane active" id="fa-icons">
                                        <h4 class="p-t-30">Design Progress</h4>
                                        <div id="myStat"></div>
                                    </div>
                                    <div class="tab-pane" id="themify-icons">
                                        <h4 class="p-t-30">Coding Progress</h4>
                                        <div id="myStat2" ></div>
                                    </div>
                                    <div class="tab-pane" id="ionicons">
                                        <h4 class="p-t-30">Doc's Progress</h4>
                                        <div id="myStat3"></div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs m-t-35 text-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#fa-icons" data-toggle="tab">
                                            <div><i class="fa fa-pie-chart"></i></div>
                                            <span>Design</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" id="themify_icon">
                                        <a class="nav-link" href="#themify-icons" data-toggle="tab">
                                            <div><i class="fa fa-check-square-o"></i></div>
                                            <span>Coding</span>
                                        </a>
                                    </li>

                                    <li class="nav-item" id="ionicons_tab">
                                        <a class="nav-link" href="#ionicons" data-toggle="tab">
                                            <div><i class="fa fa-pencil"></i></div>
                                            <span>Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card m-t-35 real_charts">
                                <div class="card-header bg-white">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-center" href="#orders_section" role="tab" data-toggle="tab">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#sales_section" role="tab" data-toggle="tab">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#users_section" role="tab" data-toggle="tab">Users</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">


                                    <!-- Tab panes -->
                                    <div class="tab-content m-t-20">
                                        <div role="tabpanel" class="tab-pane fade show active" id="orders_section">
                                            <div id="order_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade show" id="sales_section">
                                            <div id="sale_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade show" id="users_section">
                                            <div id="users_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="col-lg-5 col-12 m-t-35">
                            <div class="row">
                                <div class="col-12 text-center text-white">
                                    <div class="lorem_background">
                                        <div>
                                            <img src="img/mailbox_imgs/2.jpg" alt="lorem" class="img-fluid rounded-circle lorem_img">
                                        </div>
                                        <div class="text-white font_18">Stuart</div>
                                        <!--<div>stuart@gmail.com</div>-->
                                        <div class="text-center lorem_bg m-b-0">
                                            <div class="row">
                                                <div class="col-3 lorem_font_icon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                                <div class="col-3 lorem_font_icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <div class="col-3 lorem_font_icon">
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="fa fa-instagram"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="list-group bg-white section_border">
                                        <a href="#" class="lorem_group_item lorem_group_item_bottom">
                                            <span class="badge badge-pill badge-primary float-right">224</span>
                                            <span class="p-l-10">Followers</span>
                                            <span class="float-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="lorem_group_item">
                                            <span class="badge badge-pill badge-primary float-right">14</span>
                                            <span class="p-l-10">Following</span>
                                            <span class="float-left">
                                                <i class="fa fa-users"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col m-t-35">
                                    <div class="weather_img">
                                        <div class="row header_align">
                                            <div class="col-sm-8 col-7 text-white info">
                                                <div class="city">City: Bangkok</div>
                                                <div class="night">Night - 21:17 PM</div>

                                                <div class="temp">4<sup>o</sup></div>
                                                <div class="wind">
                                                    <span>28 km/h</span>
                                                </div>
                                            </div>
                                            <div class="icon col-5 col-sm-4">
                                                <img src="img/weather1.png" alt="weather" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="background_opacity">
                                                    <div class="row header_align">
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Mon</div>
                                                                <div>
                                                                    <img src="img/w5.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">30<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Tue</div>
                                                                <div>
                                                                    <img src="img/w2.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">29<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Wed</div>
                                                                <div>
                                                                    <img src="img/w3.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">34<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Thu</div>
                                                                <div>
                                                                    <img src="img/w4.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">32<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Fri</div>
                                                                <div>
                                                                    <img src="img/w5.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">35<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Sat</div>
                                                                <div>
                                                                    <img src="img/w2.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">36<sup>o</sup></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card m-t-35">

                                <div class="card-body m-t-10">
                                    <!--<svg id="fillgauge1"  width="100%" height="193"></svg>-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Average Monthly Uploads</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="test-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br />
                                            <span id="monthly_upload"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t-35">
                            <div class="social-counter text-center">
                                <ul class="m-b-0">
                                    <li class="facebook">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="google">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-google-plus"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="instagram">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count">2M</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-linkedin"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#content -->
        </div>
    </div>
    <!--wrapper-->
    <div id="right">
        <div class="right_content">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Welcome Micheal
                    <br/></strong> Set Your Skin Here. Checkout Admin Statistics. Good Day!.
            </div>
            <div class="well well-small dark">
                <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                    Skins
                </h4>
                <br/>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                    <div class="skin_blue skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                    <div class="skin_green skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                    <div class="skin_purple skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                    <div class="skin_orange skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                    <div class="skin_red skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                    <div class="skin_mint skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.css','css')">
                    <div class="skin_brown skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.css','css')">
                    <div class="skin_black skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.css','css')"></div>
                <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.css','css')"></div>
            </div>
            <div class="well well-small dark">
                <h4 class="brown_txt margin15_bottom">
                    <img src="img/admin.jpg" width="32" height="32" class="rounded-circle avatar-img" alt="avatar"> &nbsp;Admin
                    Statistics</h4>
                <br/>
                <ul class="list-unstyled">
                    <li class="green_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-mint"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span> &nbsp; Last Login
                        <span class="inlinesparkline float-right">2hrs Back</span>
                    </li>
                    <li class="warning_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Pending Tasks
                        <span class="dynamicsparkline float-right">12</span>
                    </li>
                    <li class="primary_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Weather Today
                        <span class="dynamicbar float-right">Rainy</span>
                    </li>
                    <li class="margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Events
                        <span class="inlinebar float-right">Team Out</span>
                    </li>
                    <li class="success_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Notifications
                        <span class="inlinebar float-right">5</span>
                    </li>
                </ul>
            </div>
            <div class="well well-small dark right_progressbar_section">
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                    Alerts
                </h4>
                <br/>
                <span>Sales Improvement</span>
                <span class="float-right">
                <small>20%</small>
            </span>
                <div class="progress">
                    <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Server Load</span>
                <span class="float-right">
                <small>80%</small>
            </span>
                <div class="progress">
                    <div class="progress-bar bg-mint w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Traffic Improvement</span>
                <span class="float-right">
                <small>55%</small>
            </span>
                <div class="progress">
                    <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- # right side -->
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
