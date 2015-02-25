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
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/index/icon-fonts/styles.css')}}">
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    </script>
</head>
<body  class="signup">
    <div class="preloader" style="display: none;">
        <div class="status" style="display: none;">&nbsp;</div>
    </div>
    <!-- =========================
   HOME SECTION       
============================== -->
    <header class="header"  style="background-color:#ffffff;">
        <!-- TOP BAR -->
        <div id="main-nav" class="navbar navbar-inverse bs-docs-nav fixed booking-navbar" >
            <div class="container">
                <div class="navbar-header responsive-logo">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{{ URL::to('./') }}}" class="navbar-brand">
                        <img src="{{asset('assets/img/index/logo.png')}}">
                        <!-- <div class="logo">Booking.com</div> -->
                    </a>
                </div>
                <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">    
                           
                            <li class=""><p>Already have an Spa Online account?</p><a href="" class="float-r" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a></li> 
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Container -->
        
            @yield('content')
        
        <!-- ./ container -->
</header>
        <!-- / END BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES  -->
    <footer>
        <div class="container">
            <!-- COMPANY ADDRESS-->
            <div class="col-md-5 company-details">
                <div class="icon-top red-text">
                    <i class="icon-fontawesome-webfont-302"></i>
                </div>
                PO Box 16122 Collins Street West, Victoria 8007 Australia
            </div>
            <!-- COMPANY EMAIL-->
            <div class="col-md-2 company-details">
                <div class="icon-top green-text">
                    <i class="icon-fontawesome-webfont-329"></i>
                </div>
                contact@designlab.co
            </div>
            <!-- COMPANY PHONE NUMBER -->
            <div class="col-md-2 company-details">
                <div class="icon-top blue-text">
                    <i class="icon-fontawesome-webfont-101"></i>
                </div>
                +613 0000 0000
            </div>
            <!-- SOCIAL ICON AND COPYRIGHT -->
            <div class="col-lg-3 col-sm-3 copyright">
                <ul class="social">
                    <li><a href=""><i class="icon-facebook"></i></a>
                    </li>
                    <li><a href=""><i class="icon-twitter-alt"></i></a>
                    </li>
                    <li><a href=""><i class="icon-linkedin"></i></a>
                    </li>
                    <li><a href=""><i class="icon-behance"></i></a>
                    </li>
                    <li><a href=""><i class="icon-dribbble"></i></a>
                    </li>
                </ul>
                ©2013 Zerif LLC
            </div>
        </div>
        <!-- / END CONTAINER -->
    </footer>
    <!-- / END FOOOTER  -->
    <!-- SCRIPTS -->
    <script src="{{asset('assets/js/index/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/index/jquery.nav.js')}}"></script>
</body>

</html>