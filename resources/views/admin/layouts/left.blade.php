<div id="left" class="fixed">
    <div class="menu_scroll">
        <div class="media user-media">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="user-wrapper">
                <a class="user-link" href="">
                    <img class="media-object img-thumbnail user-img rounded-circle admin_img3" src="{{ asset('img_admin/user-avatar-male-5-128.png')}}">
                    <p class="text-white user-info" style="font-family: '', sans-serif;">{{ Auth::user()->name; }}</p>
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
                    <span class="link-title menu_hide">&nbsp;Dashboard 2</span>
                </a>
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
