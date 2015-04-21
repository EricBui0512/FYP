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
        <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
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
        <script src="{{asset('assets/vendor/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
        <script src="{{asset('assets/js/consumer.js')}}" ></script>
        <script src="{{asset('assets/js/common.js')}}" ></script>
        <link href="//raw.github.com/jharding/typeahead.js-bootstrap.css/master/typeahead.js-bootstrap.css" rel="stylesheet" media="screen">
        <script src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
    </head>
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="//v2.zopim.com/?2tE8fg3JiSLGlxUnj41l2UC4V05CTLAE";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->
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
                        <a href="{{{ URL::to('/')}}}" class="navbar-brand">
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
                            <div class="margin-t5" style="margin:5px;">
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
            <div id="locationField"></div>
            <div class="row mt100">
                <h3 class="mb10 cfMain sd-t2">Book a spa service now</h3>
                <div class="text-left">
                    <div class="col-sm-3 bgMain">
                        {{Form::open(array('url'=>'user/book'))}}
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <div class="form-group">
                            <label for="email" accesskey="E" class="cf1">Spa </label>
                            {{Form::select('spaName',Retailer::getKeyValueData(),null,array('class'=>'form-control'))}}
                        </div>
                        <div class="form-group">
                            <label for="email" accesskey="E" class="cf1">Spa Location</label>
                            {{Form::select('spaLocation',array(),null,array('class'=>'form-control'))}}
                        </div>
                        
                        <div class="form-group">
                            <label for="checkin" class="cf1">Service Name</label>
                        <select name="serviceName" class="form-control"></select>
                    </div>
                    <div class="form-group">
                        <label class="cf1">Apointment</label>
                        <div class="col-sm-12 mb20 pa0">
                            <!--input.datepicker.form-control(size='16', type='text', value='12-02-2013', data-date-format='dd-mm-yyyy')-->
                            <div class="datetimepicker input-group date mb-lg">
                                <input type="text" class="form-control" name="apptDate">
                                <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="cf1">Time Slot</label>
                    <select name="timeSlot" class="form-control"></select>
                </div>
                
                <button type="submit" class="btn btn-default pull-right mb20">BOOK NOW</button>
                {{Form::close()}}
            </div>
            <div class="col-sm-8 bg0p30 ml30 mt60">
                {{Form::open(array('url'=>'search'))}}
                <h1 style="line-height:40px !important;font-size:45px;" class="cf1 sd-t pa20">FIND + BOOK</h1>
                <p class="pl20 sd-t" style="font-size:30px; color:#fff">massage, therapy, yoga & more</p>
                <div class="row mt20">
                    <div class="col-sm-4 ml20">
                        <div class="form-group">
                            <label for="email" accesskey="E" class="cf1">Category </label>
                            {{Form::select('category',BusinessCategory::getKeyValueData(),null,array('class'=>'form-control'))}}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="room" class="cf1">Countries</label>
                            {{Form::select('country',Country::getKeyValueData(),Country::DEFAULT_COUNTRY,array('class'=>'form-control'))}}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="checkin" class="cf1">City</label>
                            {{Form::select('city',City::getKeyValueData(),null,array('class'=>'form-control'))}}
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-8 ml20">
                        {{Form::text('search_key',null,array('class'=>'form-control','placeholder'=>'enter spa name, address to search ...'))}}
                    </div>
                    <div class="col-sm-3">
                        <label for="checkin" class="cf1"></label>
                        <button type="submit" class="btn bt-spa btn-block bt-search mb10"><i class="fa fa-search"></i>  Search</button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
</header>

<!-- =========================
PRODUCTS SECTION
============================== -->
<section class="products" data-type="background" data-speed="1" id="products" style="background-position: 50% -3000px;">
<div class="color-overlay">
    <div class="container">
        <!-- SECTION HEADER -->
        
        <!-- / END SECTION HEADER -->
        <div class="row mt20">
            <div class="col-md-9">
                @if ( ! isset($search ))
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="cf1 pa10 bgMain w300"><i class="fa fa-fire"></i> Hot Deals</h4>
                        <!-- PRODUCTS -->
                        <div class="mt30 row wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                            @if(!count($hotDeals))
                            <h3> Sorry, we have'nt deal.</h3>
                            @else
                            @foreach ($hotDeals as $key => $deal)
                            <div class="col-md-4">
                                <div class="item" style="background-image:url({{asset($deal->image_path)}});">
                                    <div class="item-overlay">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-top-content">
                                            <div class="item-top-content-inner">
                                                <div class="item-product">
                                                    <div class="item-top-title">
                                                        <p >
                                                            {{$deal->title}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-product-price">
                                                    <span class="price-num green-text">${{$deal->discount}}</span>
                                                    <p class="subdescription">
                                                        ${{$deal->amount}}
                                                    </p>
                                                    <div class="old-price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-add-content">
                                            <div class="item-add-content-inner">
                                                <div class="section">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-6">
                                                            <a href="{{URL::to('detail/'.$deal->id)}}" class="btn btn-primary custom-button green-btn">Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!-- END FIRST ROW -->
                        <!-- / END PRODUCTS LIST -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="cf1 pa10 bgMain w300"><i class="fa fa-glass"></i>  Top Services</h4>
                        <!-- PRODUCTS -->
                        <div class="row wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                            @if(!count($serviceDeals))
                            <div class="col-md-12 pl20">
                                <h3> Sorry, we have'nt deal.</h3>
                            </div>
                            @else
                            @foreach ($serviceDeals as $key => $deal)
                            <div class="col-md-4">
                                <div class="item" style="background-image:url({{asset($deal->image_path)}});">
                                    <div class="item-overlay">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-top-content">
                                            <div class="item-top-content-inner">
                                                <div class="item-product">
                                                    <div class="item-top-title">
                                                        <p >
                                                            {{$deal->title}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-product-price">
                                                    <span class="price-num green-text">${{$deal->discount}}</span>
                                                    <p class="subdescription">
                                                        ${{$deal->amount}}
                                                    </p>
                                                    <div class="old-price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-add-content">
                                            <div class="item-add-content-inner">
                                                <div class="section">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-6">
                                                            <a href="{{URL::to('detail/'.$deal->id)}}" class="btn btn-primary custom-button green-btn">Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!-- END FIRST ROW -->
                        <!-- / END PRODUCTS LIST -->
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-md-12">
                        <!-- PRODUCTS -->
                        <div class="row wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                            @if(!count($deals))
                            <h3> Sorry, we have'nt deal.</h3>
                            @else
                            @foreach ($deals as $key => $deal)
                            <div class="col-md-4">
                                <div class="item" style="background-image:url({{asset($deal->image_path)}});">
                                    <div class="item-overlay">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-top-content">
                                            <div class="item-top-content-inner">
                                                <div class="item-product">
                                                    <div class="item-top-title">
                                                        <p >
                                                            {{$deal->title}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item-product-price">
                                                    <span class="price-num green-text">${{$deal->discount}}</span>
                                                    <p class="subdescription">
                                                        ${{$deal->amount}}
                                                    </p>
                                                    <div class="old-price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-add-content">
                                            <div class="item-add-content-inner">
                                                <div class="section">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-6">
                                                            <a href="{{URL::to('detail/'.$deal->id)}}" class="btn btn-primary custom-button green-btn">Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!-- END FIRST ROW -->
                        <!-- / END PRODUCTS LIST -->
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="mb20 cf1 pa10 bgMain"><i class="fa fa-flag-checkered"></i>  Why use spa online?</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4 class="cf7">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                                <b>{{DB::table('users')->count();}} Users</b></h4>
                                <h4 class="cf8">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-sitemap fa-stack-1x fa-inverse"></i>
                                </span>
                                <b>{{DB::table('retailers')->count()}}</b> Spa service providers</h4>
                                <h4 class="cf9">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                                <b>{{DB::table('outlets')->count()}}</b> Spa locations</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="mb20 cf1 pa10 bgMain"><i class="fa fa-leaf"></i>  Featured services</h4>
                    </div>
                    <?php
                    $featured_services = Deal::getFeaturedService()
                    ?>
                    @foreach ($featured_services as $key => $deal)
                    <div class="col-sm-12">
                        <div class="thumbnail">
                            <img src="{{$deal->image_path}}" alt="...">
                            <div class="caption">
                                <h3 class="cfMain">{{$deal->title}}</h3>
                                <p class="mt5 mb5">From {{$deal->amount}} SGD</p>
                                <p><a href="/detail/{{$deal->id}}" class="btn btn-primary" role="button">Detail</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
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
<?php $company = Company::first();?>
<footer>
<div class="container">
    <!-- COMPANY ADDRESS-->
    <div class="col-md-5 company-details">
        <div class="icon-top red-text">
            <i class="icon-fontawesome-webfont-302"></i>
        </div>
        <h5>ABOUT US</h5>
        <ul>
            <li><a href="#">Who are we</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Why</a></li>
            <li><a href="#">Career</a></li>
        </ul>
       
    </div>
    <!-- COMPANY EMAIL-->
    <div class="col-md-2 company-details">
        <div class="icon-top green-text">
            <i class="icon-fontawesome-webfont-329"></i>
        </div>
        <h5>HELP</h5>
        <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">How to buy</a></li>
            <li><a href="#">Retailer Guide</a></li>
        </ul>
    </div>
    <!-- COMPANY PHONE NUMBER -->
    <div class="col-md-2 company-details">
        <div class="icon-top blue-text">
            <i class="icon-fontawesome-webfont-101"></i>
        </div>
        <h5>CONTACT INFO</h5>
        <ul>
            <li><a href="#">{{$company->address}}</a></li>
        
            <li><a href="#">{{$company->contact_email}}</a></li>
            <li><a href="#">{{$company->phone}}</a></li>
        </ul>
    </div>
    <!-- SOCIAL ICON AND COPYRIGHT -->
    <div class="col-lg-3 col-sm-3 copyright">
        <ul class="social">
            <li><a href="{{$company->fb_link}}"><i class="icon-facebook"></i></a>
        </li>
        <li><a href="{{$company->twitter_link}}"><i class="fa fa-twitter"></i></a>
    </li>
    <li><a href="{{$company->gplus_link}}"><i class="fa fa-google-plus"></i></a>
</li>

</ul>
©2013 {{$company->name}}
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
<script type="text/javascript">
$('.datetimepicker').datetimepicker({
format:"MM/DD/YYYY"
});

</script>
</body>
</html>