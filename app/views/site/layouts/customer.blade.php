@extends('site.layouts.dashboard')
@section('menu')
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
@stop