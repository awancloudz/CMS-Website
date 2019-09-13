<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    @foreach($websettings as $web)
    <!-- ========== PAGE TITLE ========== -->
    <title>{{ $web->webname }} | {{ $web->metadescription }}</title>
    <!-- ========== META TAGS ========== -->
    <meta name="description" content="{{ $web->metadescription }}">
    <meta name="keywords" content="{{ $web->keyword }}">
    <meta charset="utf-8">
    <meta name="author" content="{{ $web->owner }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    $namaweb = $web->webname;
    $logo = $web->logo;
    $icon = $web->icon;
    ?>
    @endforeach
    <link href="{{ url('/'.$icon) }}" rel="shortcut icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset ('tema1/assets/images/apple-touch-icon-144x144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset ('tema1/assets/images/apple-touch-icon-114x114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset ('tema1/assets/images/apple-touch-icon-72x72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset ('tema1/assets/images/apple-touch-icon-precomposed.png')}}" />
    
    <!-- JS FILES -->
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery-1.20.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/modernizr.custom.js')}}"></script>
    <!-- CSS FILES -->
    <link href="{{ asset ('tema1/assets/css/style.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset ('tema1/assets/css/responsive.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset ('tema1/assets/rs-plugin/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset ('tema1/assets/css/navstylechange.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset ('tema1/assets/css/cubeportfolio.min.css')}}" media="screen" rel="stylesheet" type="text/css">  
    <link href="{{ asset ('tema1/assets/css/flexslider.css')}}" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
        <!-- NAV MENU -->
        <header>
            <div class="top_line">
            <div class="container">
                <div class="row">
                @foreach($websettings as $web)
                <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-left">
                    <ul class="contact-top">
                    <!-- <li><i class="icon-location"></i> 455 Martinson, Los Angeles</li> -->
                    <li><i class="icon-mobile"></i> {{ $web->phone }}</li>
                    <li><i class="icon-mail"></i> {{ $web->email }}</li>
                    </ul>
                </div>
                @endforeach
                <div class="col-lg-6 col-md-5 pull-right hidden-phone">
                    <ul class="social-links">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title="Telegram"><i class="fa fa-telegram"></i></a></li>
                        <li id="search-btn"><a href="#"><i class="icon-search"></i></a></li>
                    </ul>
                    <div class="search-input" id="search-input" style="display: none;">
                    <input id="s-input" type="text" placeholder="Search...">
                    </div>
                </div> 
                </div>
            </div>
            </div>
        </header>
        <div class="page_head">
            <div class="nav-container" style="height: auto;">
            <nav>
                <div class="container">
                <div class="row">
                    <div class="col-lg-3 pull-left">
                        <div class="logo"><a href="{{ url('/')}}"><img src="{{ asset($logo)}}" alt="Motivadea IT Solutions"></a></div>
                    </div>
                    <div class="col-lg-9 pull-right">
                    <div class="menu">
                        <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                        @foreach($webmenu as $menu)
                            @if($menu->id_groupmenu == 1)
                            <li>
                                <a href="{{ url($menu->link) }}">{{ $menu->title }}</a>
                            </li>
                            @endif
                        @endforeach
                        </ul>
                        </div> 
                    </div>        
                    </div>
                </div>
                </div>
            </nav>
            </div>
        </div>
        <!-- END NAV MENU -->
    <!-- CONTENT -->
    @yield('content')
    <!-- END CONTENT -->
    @yield('footer')
</div>
    <!-- ================================ JQUERY =============================== -->
    <script type="text/javascript" src="{{ asset ('tema1/assets/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/sticky.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/tweetie.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/retina.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery.cycle.all.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery.cubeportfolio.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/portfolio-main.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/portfolio-4.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jcarousel.responsive.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery.jcarousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/jquery.dlmenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/testimonialrotator.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('tema1/assets/js/main.js')}}"></script>
</body>
</html>
