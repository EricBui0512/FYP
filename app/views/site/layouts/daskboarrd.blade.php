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
   <link rel="stylesheet" href="app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="vendor/animo/animate+animo.css">
   <link rel="stylesheet" href="vendor/csspinner/csspinner.min.css">
   <!-- START Page Custom CSS-->
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="vendor/fastclick/fastclick.js" type="application/javascript"></script>
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
                  <img src="app/img/logo.png" alt="App Logo" class="img-responsive">
               </div>
               <div class="brand-logo-collapsed">
                  <img src="app/img/logo-single.png" alt="App Logo" class="img-responsive">
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
                                       <img src="app/img/user/01.jpg" alt="Image" class="media-object img-circle thumb32">
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
                                       <img src="app/img/user/04.jpg" alt="Image" class="media-object img-circle thumb32">
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
                                       <img src="app/img/user/03.jpg" alt="Image" class="media-object img-circle thumb32">
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
                                       <img src="app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
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
                                       <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
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
                     <img src="app/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
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
            <ul class="nav">
               <!-- START Menu-->
               <li class="nav-heading">Main navigation</li>
               <li class="active">
                  <a href="index.html" title="Dashboard" data-toggle="" class="no-submenu">
                     <em class="fa fa-dot-circle-o"></em>
                     <div class="label label-primary pull-right">10</div>
                     <span class="item-text">Dashboard</span>
                  </a>
               </li>
               <li>
                  <a href="widgets.html" title="Widgets" data-toggle="" class="no-submenu">
                     <em class="fa fa-cube"></em>
                     <span class="item-text">Widgets</span>
                  </a>
               </li>
               <li>
                  <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-flask"></em>
                     <span class="item-text">Elements</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="button.html" title="Buttons" data-toggle="" class="no-submenu">
                           <span class="item-text">Buttons</span>
                        </a>
                     </li>
                     <li>
                        <a href="notifications.html" title="Notifications" data-toggle="" class="no-submenu">
                           <span class="item-text">Notifications</span>
                        </a>
                     </li>
                     <li>
                        <a href="spinners.html" title="Spinners" data-toggle="" class="no-submenu">
                           <span class="item-text">Spinners</span>
                        </a>
                     </li>
                     <li>
                        <a href="animations.html" title="Animations" data-toggle="" class="no-submenu">
                           <span class="item-text">Animations</span>
                        </a>
                     </li>
                     <li>
                        <a href="dropdown-animations.html" title="Dropdown" data-toggle="" class="no-submenu">
                           <span class="item-text">Dropdown</span>
                        </a>
                     </li>
                     <li>
                        <a href="panels.html" title="Panels" data-toggle="" class="no-submenu">
                           <span class="item-text">Panels</span>
                        </a>
                     </li>
                     <li>
                        <a href="portlets.html" title="Portlets" data-toggle="" class="no-submenu">
                           <span class="item-text">Portlets</span>
                        </a>
                     </li>
                     <li>
                        <a href="maps.html" title="Maps" data-toggle="" class="no-submenu">
                           <span class="item-text">Maps</span>
                        </a>
                     </li>
                     <li>
                        <a href="grid.html" title="Grid" data-toggle="" class="no-submenu">
                           <span class="item-text">Grid</span>
                        </a>
                     </li>
                     <li>
                        <a href="grid-masonry.html" title="Grid Masonry" data-toggle="" class="no-submenu">
                           <span class="item-text">Grid Masonry</span>
                        </a>
                     </li>
                     <li>
                        <a href="typo.html" title="Typography" data-toggle="" class="no-submenu">
                           <span class="item-text">Typography</span>
                        </a>
                     </li>
                     <li>
                        <a href="icons.html" title="Icons" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right">+400</div>
                           <span class="item-text">Icons</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-edit"></em>
                     <span class="item-text">Forms</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="form-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Standard</span>
                        </a>
                     </li>
                     <li>
                        <a href="form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Extended</span>
                        </a>
                     </li>
                     <li>
                        <a href="form-validation.html" title="Validation" data-toggle="" class="no-submenu">
                           <span class="item-text">Validation</span>
                        </a>
                     </li>
                     <li>
                        <a href="form-wizard.html" title="Wizard" data-toggle="" class="no-submenu">
                           <span class="item-text">Wizard</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="#" title="Charts" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-bar-chart-o"></em>
                     <span class="item-text">Charts</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="chart-flot.html" title="Flot" data-toggle="" class="no-submenu">
                           <span class="item-text">Flot</span>
                        </a>
                     </li>
                     <li>
                        <a href="chart-radial.html" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Radial</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-table"></em>
                     <span class="item-text">Tables</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="table-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Standard</span>
                        </a>
                     </li>
                     <li>
                        <a href="table-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Extended</span>
                        </a>
                     </li>
                     <li>
                        <a href="table-datatable.html" title="DataTables" data-toggle="" class="no-submenu">
                           <span class="item-text">DataTables</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li class="nav-heading">More elements</li>
               <li>
                  <a href="#" title="Pages" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-file-text-o"></em>
                     <span class="item-text">Pages</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="pages/login.html" title="Login" data-toggle="" class="no-submenu">
                           <span class="item-text">Login</span>
                        </a>
                     </li>
                     <li>
                        <a href="pages/signup.html" title="Sign up" data-toggle="" class="no-submenu">
                           <span class="item-text">Sign up</span>
                        </a>
                     </li>
                     <li>
                        <a href="pages/recover.html" title="Recover Password" data-toggle="" class="no-submenu">
                           <span class="item-text">Recover Password</span>
                        </a>
                     </li>
                     <li>
                        <a href="pages/lock.html" title="Lock" data-toggle="" class="no-submenu">
                           <span class="item-text">Lock</span>
                        </a>
                     </li>
                     <li>
                        <a href="template.html" title="Starter Template" data-toggle="" class="no-submenu">
                           <span class="item-text">Starter Template</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="#" title="Extras" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-plus"></em>
                     <span class="item-text">Extras</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="mailbox.html" title="Mailbox" data-toggle="" class="no-submenu">
                           <span class="item-text">Mailbox</span>
                        </a>
                     </li>
                     <li>
                        <a href="timeline.html" title="Timeline" data-toggle="" class="no-submenu">
                           <span class="item-text">Timeline</span>
                        </a>
                     </li>
                     <li>
                        <a href="calendar.html" title="Calendar" data-toggle="" class="no-submenu">
                           <span class="item-text">Calendar</span>
                        </a>
                     </li>
                     <li>
                        <a href="invoice.html" title="Invoice" data-toggle="" class="no-submenu">
                           <span class="item-text">Invoice</span>
                        </a>
                     </li>
                     <li>
                        <a href="search.html" title="Search" data-toggle="" class="no-submenu">
                           <span class="item-text">Search</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <!-- START Theme color options-->
               <li>
                  <a href="#" title="Color options" data-toggle="collapse-next" class="has-submenu">
                     <div class="label label-purple pull-right">4</div>
                     <em class="fa fa-tint"></em>
                     <span class="item-text">Colors</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse">
                     <li>
                        <a href="#" title="Option 1" data-toggle="load-css" data-uri="app/css/beadmin-theme-a.css" class="no-submenu">
                           <span class="item-text">Alternative 1</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="Option 2" data-toggle="load-css" data-uri="app/css/beadmin-theme-b.css" class="no-submenu">
                           <span class="item-text">Alternative 2</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="Option 3" data-toggle="load-css" data-uri="app/css/beadmin-theme-c.css" class="no-submenu">
                           <span class="item-text">Alternative 3</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="Option 4" data-toggle="load-css" data-uri="app/css/beadmin-theme-d.css" class="no-submenu">
                           <span class="item-text">Alternative 4</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <!-- END Theme color options-->
               <li>
                  <ul class="nav-labels">
                     <li class="nav-heading">Categories</li>
                     <li class="nav-labels-item">
                        <span class="circle circle-lg circle-success"></span><a href="#">Green</a>
                     </li>
                     <li class="nav-labels-item">
                        <span class="circle circle-lg circle-danger"></span><a href="#">Red</a>
                     </li>
                     <li class="nav-labels-item">
                        <span class="circle circle-lg circle-info"></span><a href="#">Skyblue</a>
                     </li>
                     <li class="nav-labels-item">
                        <span class="circle circle-lg circle-warning"></span><a href="#">Yellow</a>
                     </li>
                  </ul>
               </li>
               <!-- END Menu-->
            </ul>
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
                        <img src="app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
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
                        <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
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
                        <img src="app/img/user/07.jpg" alt="Image" class="media-object img-circle thumb32">
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
                        <img src="app/img/user/08.jpg" alt="Image" class="media-object img-circle thumb32">
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
                        <img src="app/img/user/09.jpg" alt="Image" class="media-object img-circle thumb32">
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
                        <img src="app/img/user/10.jpg" alt="Image" class="media-object img-circle thumb32">
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
               </div>Dashboard
               <small>Hi, User. Welcome back!</small>
            </h3>
            <div data-toggle="notify" data-onload data-message="&lt;b&gt;This is notify!&lt;/b&gt; Dismiss with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;warning&quot;, &quot;pos&quot;:&quot;bottom-right&quot;}" class="hidden-xs"></div>
            <div class="row">
               <!-- START dashboard main content-->
               <section class="col-md-9">
                  <!-- START chart-->
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- START widget-->
                        <div class="panel widget bg-inverse">
                           <div class="row">
                              <div class="col-sm-2 text-right">
                                 <div class="row">
                                    <div class="col-sm-12 col-xs-4">
                                       <div class="ph">
                                          <p class="h3 mb0">11200</p>
                                          <p class="m0 text-muted">Visits</p>
                                       </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                       <div class="ph">
                                          <p class="h3 mb0">2000</p>
                                          <p class="m0 text-muted">Likes</p>
                                       </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                       <div class="ph">
                                          <p class="h3 mb0">3500</p>
                                          <p class="text-muted">Subscriptions</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-10 bg-primary">
                                 <div class="p-lg">
                                    <div class="h5 mt0">Latest stadistics</div>
                                    <!-- Line chart-->
                                    <div data-type="line" data-height="100" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true"
                                    class="inlinesparkline sparkline">
                                       <!-- 1,5,3,6,5,11,2,4,5,7,9,6,4-->
                                    </div>
                                    <!-- Bar chart-->
                                    <div class="text-center">
                                       <div data-bar-color="#fff" data-height="60" data-bar-width="8" data-bar-spacing="6" class="inlinesparkline inline">1,5,3,6,5,8,2,4,5,7,9,6,4,3,6,5,9,2</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END widget-->
                     </div>
                  </div>
                  <!-- END chart-->
                  <div class="row">
                     <div class="col-md-4">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="100" class="panel widget">
                           <div class="panel-body bg-primary">
                              <div class="row row-table row-flush">
                                 <div class="col-xs-8">
                                    <p class="mb0">New connections</p>
                                    <h3 class="m0">150</h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <em class="fa fa-share-alt fa-2x"></em>
                                 </div>
                              </div>
                           </div>
                           <div class="panel-body">
                              <!-- Bar chart-->
                              <div class="text-center">
                                 <div data-bar-color="primary" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">5,3,4,6,5,9,4,4,10,5,9,6,4</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                           <div class="panel-body bg-success">
                              <div class="row row-table row-flush">
                                 <div class="col-xs-8">
                                    <p class="mb0">Uploads</p>
                                    <h3 class="m0">540</h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <em class="fa fa-cloud-upload fa-2x"></em>
                                 </div>
                              </div>
                           </div>
                           <div class="panel-body">
                              <!-- Bar chart-->
                              <div class="text-center">
                                 <div data-bar-color="success" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">10,30,40,70,50,90,70,50,90,40,40,60,40</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <!-- START widget-->
                        <div data-toggle="play-animation" data-play="fadeInRight" data-offset="0" data-delay="100" class="panel widget">
                           <div class="panel-body bg-danger">
                              <div class="row row-table row-flush">
                                 <div class="col-xs-8">
                                    <p class="mb0">Ratings received</p>
                                    <h3 class="m0">7000</h3>
                                 </div>
                                 <div class="col-xs-4 text-right">
                                    <em class="fa fa-star fa-2x"></em>
                                 </div>
                              </div>
                           </div>
                           <div class="panel-body">
                              <!-- Bar chart-->
                              <div class="text-center">
                                 <div data-bar-color="danger" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">2,7,5,9,4,2,7,5,7,5,9,6,4</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- START messages and activity-->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <div class="pull-right label label-danger">5</div>
                              <div class="pull-right label label-success">12</div>
                              <div class="panel-title">Messages</div>
                           </div>
                           <!-- START list group-->
                           <div class="list-group">
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/01.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">2h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-success circle-lg text-left"></span>Jean Daniels</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/04.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-success circle-lg text-left"></span>Alexis Wright</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla facilisi.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/03.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Lance Simpson</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Krin Price</strong>
                                       <p class="mb-sm">
                                          <small>Vestibulum pretium aliquam scelerisque.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-lg text-left"></span>Johnny Gilbert</strong>
                                       <p class="mb-sm">
                                          <small>Sed egestas, augue vitae blandit imperdiet, justo neque tincidunt sapien...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                           <!-- START panel footer-->
                           <div class="panel-footer clearfix">
                              <div class="input-group">
                                 <input type="text" placeholder="Search message .." class="form-control input-sm">
                                 <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-search"></i>
                                    </button>
                                 </span>
                              </div>
                           </div>
                           <!-- END panel-footer-->
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <div class="panel-title">News feed</div>
                           </div>
                           <!-- START list group-->
                           <div class="list-group">
                              <!-- START list group item-->
                              <div class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <span class="fa-stack fa-lg">
                                          <em class="fa fa-circle fa-stack-2x text-purple"></em>
                                          <em class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em>
                                       </span>
                                    </div>
                                    <div class="media-body clearfix">
                                       <div class="media-heading text-purple m0">NEW FILE</div>
                                       <small class="text-muted pull-right">15 minutes ago</small>
                                       <p class="m0">
                                          <small>A new uploaded file <a href="#">Bootstrap.xls </a> is now on the cloud</small>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <div class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <span class="fa-stack fa-lg">
                                          <em class="fa fa-circle fa-stack-2x text-info"></em>
                                          <em class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em>
                                       </span>
                                    </div>
                                    <div class="media-body clearfix">
                                       <div class="media-heading text-info m0">NEW DOCUMENT</div>
                                       <small class="text-muted pull-right">2 hours ago</small>
                                       <p class="m0">
                                          <small>New document <a href="#">Bootstrap.doc </a> created</small>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <div class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <span class="fa-stack fa-lg">
                                          <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                          <em class="fa fa-exclamation fa-stack-1x fa-inverse text-white"></em>
                                       </span>
                                    </div>
                                    <div class="media-body clearfix">
                                       <div class="media-heading text-danger m0">IMPORTANT MESSAGE</div>
                                       <small class="text-muted pull-right">5 hours ago</small>
                                       <p class="m0">
                                          <small>Todd Walker sent you an important messsage. <a href="#">Open</a>
                                          </small>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <div class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <span class="fa-stack fa-lg">
                                          <em class="fa fa-circle fa-stack-2x text-success"></em>
                                          <em class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em>
                                       </span>
                                    </div>
                                    <div class="media-body clearfix">
                                       <div class="media-heading text-success m0">NEW MEETING</div>
                                       <small class="text-muted pull-right">15 hours ago</small>
                                       <p class="m0">
                                          <small>Roberta Lane added a new meeting.
                                             <em>Hey Guys! Want to see there tomorrow. We have good new to share with you. Cheers!</em>
                                          </small>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <div class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <span class="fa-stack fa-lg">
                                          <em class="fa fa-circle fa-stack-2x text-warning"></em>
                                          <em class="fa fa-envelope-o fa-stack-1x fa-inverse text-white"></em>
                                       </span>
                                    </div>
                                    <div class="media-body clearfix">
                                       <div class="media-heading text-warning m0">ANOTHER MESSAGE</div>
                                       <small class="text-muted pull-right">last week</small>
                                       <p class="m0">
                                          <small>Estela Soccer sent you a messsage. Quisque viverra faucibus neque, quis elementum velit vulputate et.</small>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                           <!-- START panel footer-->
                           <div class="panel-footer clearfix">
                              <a href="#" class="pull-left">
                                 <small>Load more</small>
                              </a>
                           </div>
                           <!-- END panel-footer-->
                        </div>
                     </div>
                  </div>
                  <!-- END messages and activity-->
               </section>
               <!-- END dashboard main content-->
               <!-- START dashboard sidebar-->
               <aside class="col-md-3">
                  <!-- START widget-->
                  <div class="panel widget">
                     <div class="panel-body bg-success text-center">
                        <p>
                           <img src="app/img/user/08.jpg" alt="" class="img-circle thumb64">
                        </p>
                        <p>
                           <strong>Carrie Daniels</strong>
                           <span>is now following you</span>
                        </p>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START Secondary Widgets-->
                  <!-- START widget-->
                  <div class="panel widget">
                     <div class="panel-body">
                        <div class="text-right text-muted">
                           <em class="fa fa-globe fa-2x"></em>
                        </div>
                        <h3 class="mt0">50.5 Gb</h3>
                        <p class="text-muted">Traffic this month</p>
                        <div class="progress progress-striped progress-xs">
                           <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-purple progress-50">
                              <span class="sr-only">50% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START widget-->
                  <div class="panel widget">
                     <div class="panel-body">
                        <div class="text-right text-muted">
                           <em class="fa fa-gamepad fa-2x"></em>
                        </div>
                        <h3 class="mt0">99.999</h3>
                        <p class="text-muted">Games played last month</p>
                        <div class="progress progress-striped progress-xs">
                           <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-60">
                              <span class="sr-only">60% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START widget-->
                  <div class="panel widget">
                     <div class="panel-body">
                        <div class="text-right text-muted">
                           <em class="fa fa-coffee fa-2x"></em>
                        </div>
                        <h3 class="mt0">300</h3>
                        <p class="text-muted">Coffee cups per day</p>
                        <div class="progress progress-striped progress-xs">
                           <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-green progress-80">
                              <span class="sr-only">80% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START widget-->
                  <div class="panel widget">
                     <div class="panel-body">
                        <div class="text-right text-muted">
                           <em class="fa fa-upload fa-2x"></em>
                        </div>
                        <h3 class="mt0">1000 Gb</h3>
                        <p class="text-muted">Average Monthly Uploads</p>
                        <div class="progress progress-striped progress-xs">
                           <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-info progress-40">
                              <span class="sr-only">40% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- END Secondary Widgets-->
               </aside>
               <!-- END dashboard sidebar-->
            </div>
         </div>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </div>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="vendor/chosen/chosen.jquery.min.js"></script>
   <script src="vendor/slider/js/bootstrap-slider.js"></script>
   <script src="vendor/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="vendor/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="vendor/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- Store + JSON-->
   <script src="vendor/store/store+json2.min.js"></script>
   <!-- ScreenFull-->
   <script src="vendor/screenfull/screenfull.min.js"></script>
   <!-- START Page Custom Script-->
   <!--  Flot Charts-->
   <script src="vendor/flot/jquery.flot.min.js"></script>
   <script src="vendor/flot/jquery.flot.tooltip.min.js"></script>
   <script src="vendor/flot/jquery.flot.resize.min.js"></script>
   <script src="vendor/flot/jquery.flot.pie.min.js"></script>
   <script src="vendor/flot/jquery.flot.time.min.js"></script>
   <script src="vendor/flot/jquery.flot.categories.min.js"></script>
   <!--[if lt IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="app/js/app.js"></script>
   <!-- END Scripts-->
</body>

</html>