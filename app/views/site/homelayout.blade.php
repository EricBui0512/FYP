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
     <script src="{{asset('assets/js/consumer.js')}}" ></script>
     <script src="{{asset('assets/js/common.js')}}" ></script>
</head>


<body onload="initialize()">

    <!-- =========================
   PRE LOADER       
============================== -->
    <div class="preloader" style="display: none;">
        <div class="status" style="display: none;">&nbsp;</div>
    </div>
    <!-- =========================
   HOME SECTION       
============================== -->
    <header id="home" class="header">

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
                    <a href="./" class="navbar-brand">
                        <img src="{{asset('assets/img/index/logo.png')}}">
                        <!-- <div class="logo">Booking.com</div> -->
                    </a>
                </div>
                <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                        <li class=""><a href="">Home</a>
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
        <div class="container ">
            <!-- HEADING -->
            <h1 class="intro"></h1>
             <div id="locationField"></div>      
                <div class="row form-search" >
                    {{Form::open(array('url'=>'Consumers/search'))}}
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="text-left">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="email" accesskey="E">Service </label>
                            {{Form::select('category',BusinessCategory::getKeyValueData(),Country::DEFAULT_COUNTRY,array('class'=>'form-control'))}}
                          </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="room">Countries</label>
                            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                            {{Form::select('country',Country::getKeyValueData(),Country::DEFAULT_COUNTRY,array('class'=>'form-control'))}}
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="checkin">City</label>
                            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00" data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
                            <i class="fa fa-calendar infield"></i>
                            {{Form::select('city',array(),null,array('class'=>'form-control'))}}
                          </div>
                        </div>
                        <div class="col-sm-2">

                          <button type="submit" class="btn bt-spa btn-block bt-search">Search</button>
                        </div> 
                    </div>
                    {{Form::close()}}
                </div>
                    <!-- <div class="input-group">
                          <input id="autocomplete" placeholder="Try adding countries, regions, continents"
                                 onFocus="geolocate()" type="text" class="form-control search"></input>
                          <span class="input-group-btn">
                            <button class="btn btn-primary custom-button blue-btn" type="button">Search</button>
                          </span>
                    </div>
              
            </div><!-- /.col-lg-6 -->
            <!-- CALL TO ACTION BUTTONS -->  
        </div>
        <!-- / END BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES  -->

    </header>
   
  
    <!-- =========================
   PRODUCTS SECTION   
============================== -->

    <section class="products" data-type="background" data-speed="1" id="products" style="background-position: 50% -3000px;">
        <div class="color-overlay">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">

                    <!-- SECTION TITLE -->
                    

                    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                  
        </h6>
                </div>
                <!-- / END SECTION HEADER -->

                <!-- PRODUCTS -->
                <div class="row wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">

                    <!-- SINGLE PRODUCT -->
                    <div class="col-md-3">
                        <div class="item item-1">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>One Light</h5>
                                                <!-- PRODUCT TITLE-->
                                                <p class="subdescription">
                                                    WordPress Theme
                                                </p>
                                                <!-- PRODUCT DESCRIPTION-->
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <!-- PRICE -->
                                            <span class="price-num green-text">$17</span>
                                            <!-- OLD PRICE START -->
                                            <p class="subdescription">
                                                $36
                                            </p>
                                            <div class="old-price">
                                            </div>
                                            <!-- END OLD PRICE -->
                                        </div>
                                    </div>
                                </div>

                                <!-- ITEM HOVER CONTENT-->
                                <div class="item-add-content">
                                    <div class="item-add-content-inner">
                                        <div class="section">
                                            <p>
                                                Creative WordPress Theme
                                            </p>
                                        </div>
                                        <div class="section">
                                            <a href="#" class="btn btn-primary custom-button red-btn">Demo</a>
                                            <br>
                                            <a href="#" class="btn btn-primary custom-button green-btn">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / END FIRST ITEM -->

                    <div class="col-md-3">
                        <div class="item item-2">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Telfez</h5>
                                                <p class="subdescription">
                                                    WordPress Theme
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <span class="price-num green-text">$17</span>
                                            <p class="subdescription">
                                                $36
                                            </p>
                                            <div class="old-price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-add-content">
                                    <div class="item-add-content-inner">
                                        <div class="section">
                                            <p>
                                                Creative WordPress Theme
                                            </p>
                                        </div>
                                        <div class="section">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-6">
                                            <a href="#" class="btn btn-primary custom-button green-btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item item-3">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Calender</h5>
                                                <p class="subdescription">
                                                    Widget
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <span class="price-num green-text">$9</span>
                                            <p class="subdescription">
                                                $15
                                            </p>
                                            <div class="old-price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-add-content">
                                    <div class="item-add-content-inner">
                                        <div class="section">
                                            <p>
                                                Beautiful Calender Widget
                                            </p>
                                        </div>
                                        <div class="section">
                                            <a href="#" class="btn btn-primary custom-button red-btn">Demo</a>
                                            <br>
                                            <a href="#" class="btn btn-primary custom-button green-btn">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item item-4">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Toolbar</h5>
                                                <p class="subdescription">
                                                    UI Element
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <span class="price-num green-text">$11</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="item-add-content">
                                    <div class="item-add-content-inner">
                                        <div class="section">
                                            <p>
                                                Beautiful Toolbar with Icons
                                            </p>
                                        </div>
                                        <div class="section">
                                            <a href="#" class="btn btn-primary custom-button red-btn">Demo</a>
                                            <br>
                                            <a href="#" class="btn btn-primary custom-button green-btn">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- END FIRST ROW -->
                <!-- / END PRODUCTS LIST -->
            </div>
            <!-- / END CONTAINER -->
        </div>
        <!-- / END COLOR OVERLAY -->
    </section>
    <!-- / END PRODUCTS SECTION -->
 <!-- ======================== -->
    <!-- Login -->
    <!-- ========================= -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
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
    <script src="{{asset('assets/js/index/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('assets/js/index/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/index/jquery.nav.js')}}"></script>
    <script src="{{asset('assets/js/index/jquery.knob.js')}}"></script>
    <script src="{{asset('assets/js/index/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/index/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/index/jquery.vegas.min.js')}}"></script>
    <script src="{{asset('assets/js/index/zerif.js')}}"></script>
    <script src="{{asset('assets/js/googlemap.js')}}"></script>
</body>

</html>
