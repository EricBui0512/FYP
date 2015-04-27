<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Beautiful Responsive Animated OnePage Template">
    <meta name="keywords" content="Zerif, responsive, html, template, creative">
    <meta name="author" content="Mizanur Rahman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>

    <!-- =========================
 FAV AND TOUCH ICONS  
============================== -->
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

    <!-- =========================
     STYLESHEETS      
============================== -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index/jquery.vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('assets/fonts/index/icon-fonts/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index/pixeden-icons.css')}}">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="{{asset('assets/css/index/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index/responsive.css')}}">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <!-- WEBFONT -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
     
</head>
<body class="bg1">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=620447237967845&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header>
        <!-- TOP BAR -->
        <div id="main-nav" class="navbar navbar-inverse bs-docs-nav fixed booking-navbar" role="banner">
            <div class="container">
                <div class="navbar-header responsive-logo">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{{URL::to('/')}}}" class="navbar-brand">
                        <img src="{{asset('assets/img/index/logo.png')}}">
                    </a>
                </div>
                <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                        <li class=""><a href="{{{ URL::to('/')}}}">Home</a>
                        </li> 
                        @if (!Auth::check())              
                            <li class=""><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a></li> 
                            <li class=""><a href="{{{ URL::to('user/signup') }}}" class="btn btn-default btn-block" >Sign up</a></li> 
                        @else
                            <li class="">
                                    <div class="margin-t5">
                                        <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                           {{{ Auth::user()->username }}}<span class="caret"></span>
                                        </div>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{{ URL::to('dashboard') }}}">Dashboard</a></li>
                                           
                                            <li class="divider"></li>
                                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                                        </ul>
                                    </div>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <!-- / END TOP BAR -->
        <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->   
    </header>
    <content>
    	<div class="container content">
    		<p class="mt10 mb10"><?php echo $page->content ?></p>
    	</div>
    </content>
<!-- ======================== -->
<!-- Login -->
<!-- ========================= -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">  
            <div class="form-login">             
                <div class="tabbable custom-tabs tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll">
                    <div class="tab-content ">
                        <div class="active" id="panel1">
                              {{ Confide::makeLoginForm()->render() }}              
                        </div>
                    </div>
                </div>
            </div>
        <!-- end login -->
        </div>
      </div>
    </div>
<!-- =========================
   FOOTER             
============================== -->
 
    <!-- / END FOOOTER  -->

    <!-- SCRIPTS -->
    <script src="{{asset('assets/js/index/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/index/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/index/jquery.knob.js')}}"></script>
    <script src="{{asset('assets/js/index/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/index/jquery.vegas.min.js')}}"></script>
    <script src="{{asset('assets/js/googlemap.js')}}"></script>
    <script src="{{asset('assets/js/jssor.js')}}"></script>
    <script src="{{asset('assets/js/jssor.slider.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>
 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5165a11f04e5f961" async="async"></script>

</body>

</html>
