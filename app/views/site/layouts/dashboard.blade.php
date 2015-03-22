<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Spa</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->

   <!-- START Page Custom CSS-->
   <link rel="stylesheet" href="{{asset('assets/vendor/slider/css/slider.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/chosen/chosen.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">

   <!-- Codemirror -->
   <link rel="stylesheet" href="{{asset('assets/vendor/codemirror/lib/codemirror.css')}}">
   <!-- Bootstrap tags-->

   <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
   <!-- Vendor CSS-->

   <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/animo/animate+animo.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/csspinner/csspinner.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/framework.css')}}">
   <!-- START Page Custom CSS-->
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="{{asset('assets/app/css/app.css')}}">
   <!-- Modernizr JS Script-->
   <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}" ></script>
   <!-- FastClick for mobiles-->
   <script src="{{asset('assets/vendor/fastclick/fastclick.js')}}"></script>
	<!-- Markdown Area Codemirror and dependencies 
   <script src="{{asset('assets/vendor/codemirror/lib/codemirror.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/addon/mode/overlay.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/mode/markdown/markdown.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/mode/xml/xml.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/mode/gfm/gfm.js')}}"></script>
   <script src="{{asset('assets/vendor/marked/marked.js')}}"></script>-->
   <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
</head>

<body>
   <!-- START Main wrapper-->
   <div class="wrapper">
	  <!-- START Top Navbar-->
	  <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
		 <!-- START navbar header-->
		 <div class="navbar-header">
			<a class="navbar-brand" href="{{{ URL::to('') }}}" >
			   <div class="brand-logo">
			   		<img src="{{asset('assets/img/index/logo.png')}}" alt="App Logo" class="img-responsive" style="height:40px;">
			   </div>
			  
			</a>
		 </div>
		 <!-- END navbar header-->
		 <!-- START Nav wrapper-->
		 <div class="nav-wrapper">
			@if (Auth::check()) 
			<!-- START Left navbar-->
			   
			   <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                        <ul class="nav navbar-nav pull-right">
                            @if (Auth::check())
                                <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                                <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                            @else
                                <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                                <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                            @endif
                        </ul>
                        <!-- ./ nav-collapse -->
                    </div>
			<!-- END Left navbar-->
			@else
				<ul class="nav navbar-nav navbar-right">
			   <!-- Search icon-->
			   <li>
				  <a href="#" data-toggle="navbar-search">
					 Login
				  </a>
			   </li>         
			</ul>
			@endif
		 </div>
		 <!-- END Nav wrapper-->
		
	  </nav>
	  <!-- END Top Navbar-->
	  <!-- START aside-->
	  
	  <aside class="aside" style="margin-top:50px;">
		 <!-- START Sidebar (left)-->
		 <nav class="sidebar">
			
			 @yield('menu')
			
		 </nav>
		 <!-- END Sidebar (left)-->
	  </aside>
	  <!-- End aside-->
	  <!-- START Main section-->
	  <section>
		 <!-- START Page content-->
		 <div class="content-wrapper">
		   <!--  <h3>
			   <div class="pull-right text-center">
				  <div class="text-sm mb-sm">500 ratings</div>
				  <div data-bar-color="#cfdbe2" data-height="18" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline">2,3,4,7,5,7,8,9,5,7,8,4,7</div>
			   </div>@yield('title')
			   <small>Hi, User. Welcome back!</small>
			</h3>
			<div data-toggle="notify" data-onload data-message="&lt;b&gt;This is notify!&lt;/b&gt; Dismiss with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;warning&quot;, &quot;pos&quot;:&quot;bottom-right&quot;}" class="hidden-xs"></div> -->
			@yield('content')
		   
		 </div>
		 <!-- END Page content-->
	  </section>
	  <!-- END Main section-->
   </div>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Plugins-->
   <script src="{{asset('assets/vendor/chosen/chosen.jquery.min.js')}}"></script>
   <script src="{{asset('assets/vendor/slider/js/bootstrap-slider.js')}}"></script>
   <script src="{{asset('assets/vendor/filestyle/bootstrap-filestyle.min.js')}}"></script>
   <!-- Animo-->
   <script src="{{asset('assets/vendor/animo/animo.min.js')}}"></script>
   <!-- Sparklines-->
   <script src="{{asset('assets/vendor/sparklines/jquery.sparkline.min.js')}}"></script>
   <!-- Slimscroll-->
   <script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.min.js')}}"></script>
   <!-- Store + JSON-->
   <script src="{{asset('assets/vendor/store/store+json2.min.js')}}"></script>
   <!-- ScreenFull-->
   <script src="{{asset('assets/vendor/screenfull/screenfull.min.js')}}"></script>
   <!-- START Page Custom Script-->
   <script src="{{asset('assets/vendor/wizard/js/bwizard.min.js')}}"></script>
   <!-- Form Validation-->
   <script src="{{asset('assets/vendor/parsley/parsley.min.js')}}"></script>
   <!-- START Page Custom Script-->
   <!--  Flot Charts-->
   <script src="{{asset('assets/vendor/flot/jquery.flot.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.tooltip.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.resize.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.pie.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.time.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.categories.min.js')}}"></script>
   <script src="{{asset('assets/js/jquery.fileupload.js')}}"></script>
   <script src="{{asset('assets/js/jquery.iframe-transport.js')}}"></script>
   <script src="{{asset('assets/js/jquery.fileupload-process.js')}}"></script>
  
   <!--[if lt IE 8]><script src="js/excanvas.min.js')}}"></script><![endif]-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="{{asset('assets/app/js/app.js')}}"></script>
   <script src="{{asset('assets/js/amcharts.js')}}"></script>
   <script src="{{asset('assets/js/serial.js')}}"></script>
   <script src="{{asset('assets/js/dashboard.js')}}"></script>
   <!-- END Scripts-->
   @yield('script')
</body>

</html>