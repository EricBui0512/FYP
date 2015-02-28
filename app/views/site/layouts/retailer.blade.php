@extends('site.layouts.dashboard')
@section('menu')
    <ul class="nav">
       <!-- START Menu-->
       <li class="nav-heading">Dashboard</li>      
      
       <li>
          <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Manager Outlet</span>
          </a>
          <!-- START SubMenu item-->
          <ul class="nav collapse ">
             <li>
                <a href="{{{URL::to('outlet/create')}}}" title="Buttons" data-toggle="" class="no-submenu">
                   <span class="item-text">Create Outlet</span>
                </a>
             </li>
             <li>
                <a href="{{{URL::to('outlet/list')}}}" title="Notifications" data-toggle="" class="no-submenu">
                   <span class="item-text">List Outlet</span>
                </a>
             </li>
             
          </ul>
          <!-- END SubMenu item-->
       </li>       
    </ul>
@stop
@section('content')
  <div class="row">
      @yield('container')       
  </div>
@stop