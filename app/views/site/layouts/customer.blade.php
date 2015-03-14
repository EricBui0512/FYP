@extends('site.layouts.dashboard')
@section('menu')
   @if (Auth::check()) 
    <ul class="nav">
       <!-- START Menu-->
        <li>
          <a href="{{{URL::to('customer/dashboard')}}}">Dashboard</a>
        </li>      
       <li>
          <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Profile</span>
          </a>
         
       </li>
       <li>
          <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Transaction listing</span>
          </a>
          
        </li>
         
    </ul>
  @endif
@stop