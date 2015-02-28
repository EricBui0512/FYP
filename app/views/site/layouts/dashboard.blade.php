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
   <title>BeAdmin - Bootstrap Admin Theme</title>
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
   <!-- START Page Custom CSS-->
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="{{asset('assets/app/css/app.css')}}">
   <!-- Modernizr JS Script-->
   <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}" ></script>
   <!-- FastClick for mobiles-->
   <script src="{{asset('assets/vendor/fastclick/fastclick.js')}}"></script>
    <!-- Markdown Area Codemirror and dependencies -->
   <script src="{{asset('assets/vendor/codemirror/lib/codemirror.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/addon/mode/overlay.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/mode/markdown/markdown.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/mode/xml/xml.js')}}"></script>
   <script src="{{asset('assets/vendor/codemirror/mode/gfm/gfm.js')}}"></script>
   <script src="{{asset('assets/vendor/marked/marked.js')}}"></script>
</head>

<body>
   <!-- START Main wrapper-->
   <div class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->
         <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
               <div class="brand-logo">
                  <img src="../assets/app/img/logo.png" alt="App Logo" class="img-responsive">
               </div>
               <div class="brand-logo-collapsed">
                  <img src="../assets/app/img/logo-single.png" alt="App Logo" class="img-responsive">
               </div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                     <em class="fa fa-navicon"></em>
                  </a>
                  <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                  <a href="#" data-toggle-state="aside-toggled" class="visible-xs">
                     <em class="fa fa-navicon"></em>
                  </a>
               </li>
               <!-- START Messages menu (dropdown-list)-->
               <li class="dropdown dropdown-list">
                  <a href="#" data-toggle="dropdown" data-play="flipInX" class="dropdown-toggle">
                     <em class="fa fa-envelope"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li class="dropdown-menu-header">Unread messages</li>
                     <li class="p-sm">
                        <input type="text" placeholder="Find contacts.." onfocus="javascript:void(0);" class="form-control">
                     </li>
                     <li>
                        <div class="scroll-viewport">
                           <!-- START list group-->
                           <div class="list-group scroll-content">
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="../assets/app/img/user/01.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">5m</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-success circle-md"></span>Greg Lewis</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="../assets/app/img/user/04.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-success circle-md"></span>Constance Cook</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="../assets/app/img/user/03.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-md"></span>Cody Barnes</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="../assets/app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-md"></span>Gina Robinson</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="../assets/app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">yesterday</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-md"></span>Violet Olson</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                        </div>
                     </li>
                     <!-- START dropdown footer-->
                     <li class="p">
                        <a href="#" class="text-center">
                           <small class="text-primary">More messages</small>
                        </a>
                     </li>
                     <!-- END dropdown footer-->
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Messages menu (dropdown-list)-->
               <!-- START User avatar toggle-->
               <li>
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a href="#" data-toggle-state="aside-user">
                     <em class="fa fa-user"></em>
                  </a>
               </li>
               <!-- END User avatar toggle-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
               <!-- Search icon-->
               <li>
                  <a href="#" data-toggle="navbar-search">
                     <em class="fa fa-search"></em>
                  </a>
               </li>
               <!-- Fullscreen-->
               <li>
                  <a href="#" data-toggle="fullscreen">
                     <em class="fa fa-expand"></em>
                  </a>
               </li>
               <!-- START Alert menu-->
               <li class="dropdown dropdown-list">
                  <a href="#" data-toggle="dropdown" data-play="flipInX" class="dropdown-toggle">
                     <em class="fa fa-bell"></em>
                     <div class="label label-danger">11</div>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-twitter fa-2x text-info"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <p class="m0">New followers</p>
                                    <p class="m0 text-muted">
                                       <small>1 new follower</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-envelope fa-2x text-warning"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <p class="m0">New e-mails</p>
                                    <p class="m0 text-muted">
                                       <small>You have 10 new emails</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-tasks fa-2x text-success"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <p class="m0">Pending Tasks</p>
                                    <p class="m0 text-muted">
                                       <small>11 pending task</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- last list item -->
                           <a href="#" class="list-group-item">
                              <small>More notifications</small>
                              <span class="label label-danger pull-right">14</span>
                           </a>
                        </div>
                        <!-- END list group-->
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Alert menu-->
               <!-- START Contacts button-->
               <li>
                  <a href="#" data-toggle-state="offsidebar-open">
                     <em class="fa fa-group"></em>
                  </a>
               </li>
               <!-- END Contacts menu-->
            </ul>
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form role="search" action="search.html" class="navbar-form">
            <div class="form-group has-feedback">
               <input type="text" placeholder="Type and hit Enter.." class="form-control">
               <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
         </form>
         <!-- END Search form-->
      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <nav class="sidebar">
            <!-- START user info-->
            <div class="item user-block">
               <!-- User picture-->
               <div class="user-block-picture">
                  <div class="user-block-status">
                     <img src="../assets/app/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                     <div class="circle circle-success circle-lg"></div>
                  </div>
                  <!-- Status when collapsed-->
               </div>
               <!-- Name and Role-->
               <div class="user-block-info">
                  <span class="user-block-name item-text">Welcome User</span>
                  <span class="user-block-role">UX-Dev</span>
               </div>
            </div>
            <!-- END user info-->
             @yield('menu')
            
         </nav>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div class="p-lg text-center">
               <em class="fa fa-user"></em>
               <strong>Connections</strong>
            </div>
            <ul class="nav">
               <!-- END user info-->
               <li class="p">
                  <div class="form-group has-feedback">
                     <input type="text" placeholder="Search contacts.." class="form-control input-sm">
                     <em class="fa fa-search form-control-feedback text-muted"></em>
                  </div>
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-success circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="../assets/app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Laura Sam</strong>
                           <br>
                           <small class="text-muted">Lead, Developer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-success circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="../assets/app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">Writer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-danger circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="../assets/app/img/user/07.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Mika Long</strong>
                           <br>
                           <small class="text-muted">System Analyst</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-warning circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="../assets/app/img/user/08.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Danielle Berry</strong>
                           <br>
                           <small class="text-muted">Developer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="../assets/app/img/user/09.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Martin Cooper</strong>
                           <br>
                           <small class="text-muted">Designeer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="../assets/app/img/user/10.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Daniel Curtis</strong>
                           <br>
                           <small class="text-muted">Designer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <div class="p-lg text-center">
                     <!-- Optional link to list more users-->
                     <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                        <strong>Load more..</strong>
                     </a>
                  </div>
               </li>
            </ul>
            <!-- Extra items-->
            <div class="p">
               <p>
                  <small class="text-muted">Tasks completion</small>
               </p>
               <div class="progress progress-xs m0">
                  <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                     <span class="sr-only">80% Complete</span>
                  </div>
               </div>
            </div>
            <div class="p">
               <p>
                  <small class="text-muted">Upload quota</small>
               </p>
               <div class="progress progress-xs m0">
                  <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-40">
                     <span class="sr-only">40% Complete</span>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- END aside-->
      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <div class="content-wrapper">
            <h3>
               <div class="pull-right text-center">
                  <div class="text-sm mb-sm">500 ratings</div>
                  <div data-bar-color="#cfdbe2" data-height="18" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline">2,3,4,7,5,7,8,9,5,7,8,4,7</div>
               </div>@yield('title')
               <!-- <small>Hi, User. Welcome back!</small> -->
            </h3>
            <div data-toggle="notify" data-onload data-message="&lt;b&gt;This is notify!&lt;/b&gt; Dismiss with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;warning&quot;, &quot;pos&quot;:&quot;bottom-right&quot;}" class="hidden-xs"></div>
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
   <!--  Flot Charts-->
   <script src="{{asset('assets/vendor/flot/jquery.flot.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.tooltip.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.resize.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.pie.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.time.min.js')}}"></script>
   <script src="{{asset('assets/vendor/flot/jquery.flot.categories.min.js')}}"></script>
   <!--[if lt IE 8]><script src="js/excanvas.min.js')}}"></script><![endif]-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="{{asset('assets/app/js/app.js')}}"></script>
   <!-- END Scripts-->
</body>

</html>