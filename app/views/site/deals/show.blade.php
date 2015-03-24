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
    </header>
    <content>
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-image" style="margin-left: 0;">
                    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;height: 456px; background: #191919; overflow: hidden;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
                        <?php $big_images = explode(',', $detail->big_img)?>
                        <?php $thumb_images = explode(',', $detail->thumb_img)?>
                        @for ($i = 0; $i < count($big_images); $i++)
                            <div>
                                <img u="image" src="/../{{$big_images[$i]}}" />
                                <img u="thumb" src="/../{{$thumb_images[$i]}}" />
                            </div>
                        @endfor  
                        </div>
        
      
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                        <!-- Thumbnail Navigator Skin Begin -->
                        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
                          <!-- Arrow Navigator Skin Begin -->
                       
                            <div u="slides" style="cursor: move;">
                                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                                    <div class=c>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                    </div>
                    </div>
                </div>
       
                <div class="col-md-6">
                    <h3 class="cfMain">{{$detail->title}}</h3>
                    <p class="mt10 mb10">{{$detail->summary}}</p>
                    <p class="fs12">Price: <span class="">{{number_format($detail->amount)}} SGD</span></p>
                    <p class="fs20 mt10 mb10 cf7">{{number_format($detail->amount - $detail->discount)}} SGD</p>
                    <a href="{{URL::to('purchase/'.$deal_id)}}" class="btn bt-spa">Purchase</a>
                </div>
            </div>
            
            <div class="row mt30">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                      <li role="presentation" class="active"><a href="#detail"  role="tab" data-toggle="tab">Detail</a></li>
                      <li role="presentation" ><a href="#conditions"  role="tab" data-toggle="tab">Conditions</a></li>
                      <li role="presentation"><a href="#serviceprovider"  role="tab" data-toggle="tab">About Spa Service Provider</a></li>
                    </ul>

                    <div class="tab-content pa20">
                      <div role="tabpanel" class="tab-pane active" id="conditions">
                          {{$detail->special_condition}}
                          {{$detail->condition1}}
                          
                      </div>
                      <div role="tabpanel" class="tab-pane" id="detail">
                          {{$detail->summary}}
                          {{$detail->highlights}}
                      </div>
                      <div role="tabpanel" class="tab-pane" id="serviceprovider">
                        <h3>{{$detail->retailerName}}</h3>
                        <h4>{{$detail->outletAddress}}, {{$detail->outletCity}}, {{$detail->outletCountry}}</h4>
                        <p><a href="//{{$detail->outletWebsite}}" target="_blank">{{$detail->outletWebsite}}</a></h4>
                        <p><b>Working hours:  </b>from {{$detail->outletStartTime}} to {{$detail->outletEndTime}}</p>
                        <p><b>MAP</b></p>
                       
                            <img src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyBvK67-gFTje3jAzNJAeCv60FU6xR4ZXGo&size=512x512&place={{$detail->outletAddress}}, {{$detail->outletCity}}, {{$detail->outletCountry}}">

                      </div>
                    </div>
                </div>
                <script>
                  $('#myTab a').click(function (e) {
                      e.preventDefault();
                      $(this).tab('show');
                  });
                </script> 
            </div>
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
