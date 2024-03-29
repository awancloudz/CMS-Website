<!DOCTYPE html>
<html lang="en"><head>
<?php
$websettings = App\Settings::where('id',1)->get();
?>
@foreach($websettings as $web)
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="{{ $web->metadescription }}" />
    <meta name="author" content="{{ $web->owner }}" />
    <!-- ========== PAGE TITLE ========== -->
    <title>{{ $web->webname }} | {{ $web->metadescription }}</title>
    <?php 
    $namaweb = $web->webname;
    $logo = $web->logo;
    $icon = $web->icon;
    ?>
@endforeach
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ asset ('dashboard/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('dashboard/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	
	<!--bootstrap -->
    <link href="{{ asset ('dashboard/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <link href="{{ asset ('dashboard/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ asset ('dashboard/plugins/material/material.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('dashboard/css/material_style.css') }}">
	<!-- animation -->
	<link href="{{ asset ('dashboard/css/pages/animate_page.css') }}" rel="stylesheet">
	<!-- Theme Styles -->
    
    <link href="{{ asset ('dashboard/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('dashboard/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('dashboard/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('dashboard/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('dashboard/css/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <!-- dropzone -->
    <link href="{{ asset ('dashboard/plugins/dropzone/dropzone.css') }}" rel="stylesheet" media="screen">
    <!-- Owl Carousel Assets -->
    <link href="{{ asset ('dashboard/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset ('dashboard/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
	<!-- favicon -->
    <link href="{{ url('/'.$icon) }}" rel="shortcut icon"/>
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md logo-cyan header-cyan white-sidebar-color">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="{{ url('user/admin') }}">
                    <span class="logo-icon material-icons fa-rotate-45">mood</span>
                    <span class="logo-default" >Admin</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">

                                <li class="external">

                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user8.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="assets/img/user/user5.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> Settings </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="{{ url('/')}}" target="_blank">
                                        <i class="icon-rocket"></i> ke FrontPage </a>
                                </li>
                                <li>
                                    <a href="{{ url('user/admin/users')}}">
                                        <i class="icon-user"></i> Pengguna </a>
                                </li>
                                <li>
                                    <a href="{{ url('user/admin/themes')}}">
                                        <i class="icon-screen-desktop"></i> Tema
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('user/admin/settings')}}">
                                        <i class="icon-settings"></i> Pengaturan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('user/admin/logout')}}">
                                        <i class="icon-login"></i> Keluar </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- start color quick setting -->
        <div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >
					
				<li><p class="selector-title">Sidebar Color</p></li>
				<li class="complete"><div class="theme-color sidebar-theme">
				<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
				</div></li>
             	<li><p class="selector-title">Header Brand color</p></li>
             	<li class="theme-option"><div class="theme-color logo-theme">
             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
             	<li><p class="selector-title">Header color</p></li>
             	<li class="theme-option"><div class="theme-color header-theme">
             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
			</ul>
			</div>
		</div>
        <!-- end color quick setting -->
        
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="{{ asset ('dashboard/img/profile.png') }}" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> Administrator</p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
                            </li>
                            <li class="nav-item start active">
	                            <a href="{{ url('user/admin')}}" class="nav-link nav-toggle"> <i class="material-icons">home</i>
	                                <span class="title">Dashboard</span> 
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Frontpage Web</span>
                                	<span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{ url('user/admin/slider')}}" class="nav-link ">
	                                        <span class="title">Slider Image</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="{{ url('user/admin/about')}}" class="nav-link ">
	                                        <span class="title">Profil</span>
	                                    </a>
                                    </li>
	                                <li class="nav-item">
	                                    <a href="{{ url('user/admin/services')}}" class="nav-link ">
	                                        <span class="title">Layanan Kami</span>
	                                        <span class="selected"></span>
	                                    </a>
                                    </li>
                                    <li class="nav-item ">
	                                    <a href="{{ url('user/admin/portofolio')}}" class="nav-link ">
	                                        <span class="title">Portofolio</span>
	                                    </a>
                                    </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{ url('user/admin/menu')}}" class="nav-link nav-toggle"> <i class="material-icons">list</i>
	                                <span class="title">Menu Manager</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/pages')}}" class="nav-link nav-toggle"> <i class="material-icons">class</i>
	                                <span class="title">Halaman</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/category')}}" class="nav-link nav-toggle"> <i class="material-icons">widgets</i>
	                                <span class="title">Kategori Blog</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/blog')}}" class="nav-link nav-toggle"> <i class="material-icons">content_copy</i>
	                                <span class="title">Posting Blog</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/contact')}}" class="nav-link nav-toggle"> <i class="material-icons">email</i>
	                                <span class="title">Kontak</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/comments')}}" class="nav-link nav-toggle"> <i class="material-icons">comment</i>
	                                <span class="title">Komentar</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/themes')}}" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
	                                <span class="title">Tema</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/users')}}" class="nav-link nav-toggle"> <i class="material-icons">account_box</i>
	                                <span class="title">Pengguna</span> 
	                            </a>
                            </li>
                            <li class="nav-item">
	                            <a href="{{ url('user/admin/settings')}}" class="nav-link nav-toggle"> <i class="material-icons">settings</i>
	                                <span class="title">Pengaturan</span> 
	                            </a>
                            </li>
	                    </ul>
	                </div>
                </div>
            </div>
             <!-- end sidebar menu -->
             
			<!-- start page content -->
            @yield('content')
            <!-- end page content -->

        </div>
        <!-- end page container -->

        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> <?php echo date('Y'); ?> &copy; by <a href="http://motivadea.id">Motivadea IT Solutions</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{ asset ('dashboard/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset ('dashboard/plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset ('dashboard/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
	<script src="{{ asset ('dashboard/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset ('dashboard/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    <!-- data tables -->
    <script src="{{ asset ('dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 	<script src="{{ asset ('dashboard/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}" ></script>
    <script src="{{ asset ('dashboard/js/pages/table/table_data.js') }}" ></script>
    <!-- Common js-->
	<script src="{{ asset ('dashboard/js/app.js') }}" ></script>
    <script src="{{ asset ('dashboard/js/layout.js') }}" ></script>
    <script src="{{ asset ('dashboard/js/theme-color.js') }}" ></script>
    <!-- owl carousel -->
    <script src="{{ asset ('dashboard/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset ('dashboard/js/pages/owl-carousel/owl_data.js') }}"></script>
    <!-- material -->
    <script src="{{ asset ('dashboard/plugins/material/material.min.js') }}"></script>
	<!-- animation -->
	<script src="{{ asset ('dashboard/js/pages/ui/animations.js') }}" ></script>
    <!-- dropzone -->
    <script src="{{ asset ('dashboard/plugins/dropzone/dropzone.js') }}" ></script>
    <!-- chart js -->
    <script src="{{ asset ('dashboard/plugins/chart-js/Chart.bundle.js') }}" ></script>
    <script src="{{ asset ('dashboard/plugins/chart-js/utils.js') }}" ></script>
    <script src="{{ asset ('dashboard/js/pages/chart/chartjs/home-data3.js') }}" ></script>
    <!-- sparkline -->
    <script src="{{ asset ('dashboard/plugins/sparkline/jquery.sparkline.min.js') }}" ></script>
	<script src="{{ asset ('dashboard/js/pages/sparkline/sparkline-data.js') }}" ></script>
    <!-- end js include path -->
  </body>
</html>