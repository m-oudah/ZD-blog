<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <script src="https://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>
    @yield('head')
    <title>Control Panel</title>



    <!--data table -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">



    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="icon" href="{{asset('icons/apple-icon-76x76.png')}}" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('Admin/files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">

    <!-- validator -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/css/pages.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/icon/feather/css/feather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/css/font-awesome-n.min.css')}}">

    <link rel="stylesheet" href="{{asset('Admin/files/bower_components/chartist/css/chartist.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/files/assets/css/widget.css')}}">

    <!-- select 2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



</head>

<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="#">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {
                                petok: "d7085488e68be09dcc0affe8c23994e568ae87bc-1572839821-86400"
                            };
                            //]]>
                        </script>
                        <script type="text/javascript" src="{{asset('Admin/ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js')}}"></script>
                        <img class="img-fluid" data-cfsrc="{{asset('Admin/files/assets/images/logo.png')}}" alt="Theme-Logo" style="display:none;visibility:hidden;" /><noscript><img class="img-fluid" src="{{asset('Admin/files/assets/images/logo.png')}}" alt="Theme-Logo" /></noscript>
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
										<span class="input-group-prepend search-close">
											<i class="feather icon-x input-group-text"></i>
										</span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
											<i class="feather icon-search input-group-text"></i>
										</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-4a4b48e0f6e8afa47e97f520-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">


                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">

                                    <span>{{Auth::user()->name}}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i>
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-search-box">
                            <a class="back_friendlist">
                                <i class="feather icon-x"></i>
                            </a>
                            <div class="right-icon-control">
                                <div class="input-group input-group-button">
                                    <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" data-cfsrc="{{asset('Admin/files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image " style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius img-radius" src="{{asset('Admin/files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image "></noscript>
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{asset('Admin/files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="{{asset('Admin/files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{asset('Admin/files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="{{asset('Admin/files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" data-cfsrc="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius" src="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image"></noscript>
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-x"></i> Josephin Doe
                </a>
            </div>
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" data-cfsrc="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius img-radius m-t-5" src="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image"></noscript>
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" data-cfsrc="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image" style="display:none;visibility:hidden;"><noscript><img class="media-object img-radius img-radius m-t-5" src="{{asset('Admin/files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image"></noscript>
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box">
                <div class="right-icon-control">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item  pcoded-left-item">

                                <li class=" @if($page =='index')active pcoded-trigger @endif">
                                    <a href="{{route('home')}}" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="feather icon-home"></i>
											</span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>


                             




                                <li class="pcoded-hasmenu @if($page =='blogs' || $page =='blogcateg'
                                                 ) active pcoded-trigger @endif">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <i class="feather icon-grid"></i></span>
                                        <span class="pcoded-mtext ">Blog</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" @if($page =='blogs') active pcoded-trigger @endif">
                                            <a href="{{route('index.Admin.Blog')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Blog</span>
                                            </a>
                                        </li>
                                        <li class=" @if($page =='blogcateg') active pcoded-trigger @endif">
                                            <a href="{{route('index.Admin.blogcateg')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Blog Categories</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>




                                <li class="pcoded-hasmenu @if($page =='slider' 
                                                 ) active pcoded-trigger @endif">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <i class="feather icon-grid"></i></span>
                                        <span class="pcoded-mtext ">Slider</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" @if($page =='slider') active pcoded-trigger @endif">
                                            <a href="{{route('index.Admin.Slider')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Slider</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>




                                <li class=" @if($page =='aboutus')active pcoded-trigger @endif">
                                    <a href="/aboutus/update/1" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="feather icon-info"></i>
											</span>
                                        <span class="pcoded-mtext">About Us</span>
                                    </a>
                                </li>





                            </ul>





                        </div>
                    </div>
                </nav>

                <div class="pcoded-content">


                    @yield('content')


                </div>



                <div id="styleSelector">
                </div>

            </div>
        </div>
    </div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
<h1>Warning!!</h1>
<p>You are using an outdated version of Internet Explorer, please upgrade
    <br/>to any of the following web browsers to access this website.
</p>
<div class="iew-container">
    <ul class="iew-download">
        <li>
            <a href="http://www.google.com/chrome/">
                <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                <div>Chrome</div>
            </a>
        </li>
        <li>
            <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                <div>Firefox</div>
            </a>
        </li>
        <li>
            <a href="http://www.opera.com">
                <img src="../files/assets/images/browser/opera.png" alt="Opera">
                <div>Opera</div>
            </a>
        </li>
        <li>
            <a href="https://www.apple.com/safari/">
                <img src="../files/assets/images/browser/safari.png" alt="Safari">
                <div>Safari</div>
            </a>
        </li>
        <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="../files/assets/images/browser/ie.png" alt="">
                <div>IE (9 & above)</div>
            </a>
        </li>
    </ul>
</div>
<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('Admin/files/assets/pages/waves/js/waves.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>

<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>


<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script src="{{asset('Admin/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/assets/pages/data-table/js/jszip.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/assets/pages/data-table/js/pdfmake.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/assets/pages/data-table/js/vfs_fonts.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>

<script src="{{asset('Admin/files/assets/pages/data-table/js/data-table-custom.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/assets/js/pcoded.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/assets/js/vertical/vertical-layout.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script src="{{asset('Admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>
<script type="4a4b48e0f6e8afa47e97f520-text/javascript" src="{{asset('Admin/files/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
<script type="4a4b48e0f6e8afa47e97f520-text/javascript" src="{{asset('Admin/files/custom-dashboard.min.js')}}"></script>
<script type="1ea1c033bad3b352e90d1bc2-text/javascript" src="{{asset('Admin/files/assets/js/script.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="1ea1c033bad3b352e90d1bc2-text/javascript"></script>

<!-- validator -->
<script src="{{asset('Admin/cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js')}}" type="b7bb0fdfe39c9a56aa62bc30-text/javascript"></script>
<script src="{{asset('Admin/cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js')}}" type="b7bb0fdfe39c9a56aa62bc30-text/javascript"></script>
<script type="b7bb0fdfe39c9a56aa62bc30-text/javascript" src="{{asset('Admin/files/assets/pages/form-validation/validate.js')}}"></script>
<script type="b7bb0fdfe39c9a56aa62bc30-text/javascript" src="{{asset('Admin/files/assets/pages/form-validation/form-validation.js')}}"></script>

<script type="1ea1c033bad3b352e90d1bc2-text/javascript">
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

<script src="{{asset('Admin/ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="1ea1c033bad3b352e90d1bc2-|49" defer=""></script>
</body>


</html>
