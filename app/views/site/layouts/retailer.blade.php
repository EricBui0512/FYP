@extends('site.layouts.dashboard')
@section('menu')
<ul class="nav">
  <!-- START Menu-->
  <li>
    <a href="{{{URL::to('retailer/dashboard')}}}" title="Elements">
      <em class="fa fa-tachometer"></em>
      <span class="item-text">Dashboard</span>
    </a>
  </li>
  <li>
    <!-- <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
      <em class="fa fa-flask"></em>
      <span class="item-text">Manage Address</span>
    </a> -->
    <!-- START SubMenu item-->
    <!--  <ul class="nav collapse ">
      <li>
        <a href="{{{URL::to('address/create')}}}" title="Buttons" data-toggle="" class="no-submenu">
          <span class="item-text">Create Address</span>
        </a>
      </li>
      <li>
        <a href="{{{URL::to('address')}}}" title="Notifications" data-toggle="" class="no-submenu">
          <span class="item-text">List Address</span>
        </a>
      </li>
      
    </ul> -->
    <!-- END SubMenu item-->
  </li>
  <li>
    <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
      <em class="fa fa-cubes"></em>
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
      <em class="fa fa-coffee"></em>
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
        <a href="{{{URL::to('service')}}}" title="Notifications" data-toggle="" class="no-submenu">
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
        <a href="{{{URL::to('deal')}}}" title="Notifications" data-toggle="" class="no-submenu">
          <span class="item-text">List Deals</span>
        </a>
      </li>
      <li>
        <a href="{{{URL::to('deal/cancellation')}}}" title="Notifications" data-toggle="" class="no-submenu">
          <span class="item-text">Cancellation</span>
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
<div id="confirm" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div>Are you sure?</div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
        <button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div id="delImage" class="modal fade bs-example-modal-sm-img" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div>Are you sure?</div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
        <button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div>
  </div>
</div>