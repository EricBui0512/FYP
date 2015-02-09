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


<body><img class="vegas-background" src="/assets/img/index/backgrounds/bg3.jpg" style="position: fixed; left: 0px; top: -307.333333333333px; width: 1366px; height: 910.666666666667px; bottom: auto; right: auto;">
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
                        <div class="logo">Booking.com</div>
                    </a>
                </div>
                <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                        <li class=""><a href="#home">Home</a>
                        </li>               
                        <li class=""><a href="#products">Login</a> 
                    </ul>
                </nav>
            </div>
        </div>
        <!-- / END TOP BAR -->

        <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
        <div class="container">


            <!-- HEADING -->
            <h1 class="intro"></h1>
             <div id="locationField">
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>
    </div>

    <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>
               <div class="col-md-12">
                    <div class="input-group">
                      <input type="text" class="form-control search"  id="autocomplete2" placeholder="Enter your address"
             onFocus="geolocate()" type="text" placeholder="Try adding countries, regions, continents or specific travel interests">
                      <span class="input-group-btn">
                        <button class="btn btn-primary custom-button blue-btn" type="button">Search</button>
                      </span>
                    </div><!-- /input-group -->
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

                <div class="row wow fadeInRight animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                    <div class="col-md-3">
                        <div class="item item-5">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Public Radio</h5>
                                                <p class="subdescription">
                                                    UI Element
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <span class="price-num green-text">$15</span>
                                            <p class="subdescription">
                                                $23
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
                                                Creative Radio PSD
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
                        <div class="item item-6">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Health Care</h5>
                                                <p class="subdescription">
                                                    One Page Template
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <span class="price-num green-text">$18</span>
                                            <p class="subdescription">
                                                $30
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
                                                Responsive One Page Template
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
                        <div class="item item-7">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Radio Dial</h5>
                                                <p class="subdescription">
                                                    UI Element
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-product-price">
                                            <span class="price-num green-text">$10</span>
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
                        <div class="item item-8">
                            <div class="item-overlay">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h5>Pricing Page</h5>
                                                <p class="subdescription">
                                                    UI Element
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
                                                Creative UI Element
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
                <!-- / END PRODUCTS LIST -->
            </div>
            <!-- / END CONTAINER -->
        </div>
        <!-- / END COLOR OVERLAY -->
    </section>
    <!-- / END PRODUCTS SECTION -->
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
