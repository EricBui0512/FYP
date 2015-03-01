@extends('site.layouts.dashboard')
@section('menu')
    <ul class="nav">
       <!-- START Menu-->
       <li class="nav-heading">Dashboard</li>      
        <li>
            <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
               <em class="fa fa-flask"></em>
               <span class="item-text">Manage Address</span>
            </a>
            <!-- START SubMenu item-->
            <ul class="nav collapse ">
               <li>
                  <a href="{{{URL::to('address/create')}}}" title="Buttons" data-toggle="" class="no-submenu">
                     <span class="item-text">Create Address</span>
                  </a>
               </li>
               <li>
                  <a href="{{{URL::to('outlet/list')}}}" title="Notifications" data-toggle="" class="no-submenu">
                     <span class="item-text">List Address</span>
                  </a>
               </li>
               
            </ul>
            <!-- END SubMenu item-->
         </li>
       <li>
          <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Manage Outlet</span>
          </a>
          <!-- START SubMenu item-->
          <ul class="nav collapse ">
             <li>
                <a href="{{{URL::to('outlet/create')}}}" title="Buttons" data-toggle="" class="no-submenu">
                   <span class="item-text">Create Outlet</span>
                </a>
             </li>
             <li>
                <a href="{{{URL::to('outlet')}}}" title="Notifications" data-toggle="" class="no-submenu">
                   <span class="item-text">List Outlet</span>
                </a>
             </li>
             
          </ul>
          <!-- END SubMenu item-->
       </li>
       <li>
          <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Manage Service</span>
          </a>
          <!-- START SubMenu item-->
          <ul class="nav collapse ">
             <li>
                <a href="{{{URL::to('service/create')}}}" title="Buttons" data-toggle="" class="no-submenu">
                   <span class="item-text">Create service</span>
                </a>
             </li>
             <li>
                <a href="{{{URL::to('service/list')}}}" title="Notifications" data-toggle="" class="no-submenu">
                   <span class="item-text">List service</span>
                </a>
             </li>
             
          </ul>
          <!-- END SubMenu item-->
        </li>
        <li>
          <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Manage Deals</span>
          </a>
          <!-- START SubMenu item-->
          <ul class="nav collapse ">
             <li>
                <a href="{{{URL::to('deal/create')}}}" title="Buttons" data-toggle="" class="no-submenu">
                   <span class="item-text">Create Deals</span>
                </a>
             </li>
             <li>
                <a href="{{{URL::to('deal/list')}}}" title="Notifications" data-toggle="" class="no-submenu">
                   <span class="item-text">List Deals</span>
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