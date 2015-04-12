@extends('site.layouts.dashboard')
@section('menu')
   @if (Auth::check()) 
    <ul class="nav">
       <!-- START Menu-->
        <li>
          <a href="{{URL::to('user/dashboard')}}">Dashboard</a>
        </li>      
       <li>
          <a href="#" class="no-submenu">
             <em class="fa fa-flask"></em>
             <span class="item-text">Profile</span>
          </a>
         
       </li>
       <li>
          <a href="{{URL::to('user/transaction')}}" class="no-submenu">
             <em class="fa fa-cube"></em>
             <span class="item-text">Transactions history</span>
          </a>
          
        </li>
         
    </ul>
  @endif
@stop