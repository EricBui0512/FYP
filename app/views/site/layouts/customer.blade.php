@extends('site.layouts.dashboard')
@section('menu')
    <ul class="nav">
    @if (Auth::check())
       <!-- START Menu-->
        <li>
          <a href="{{URL::to('user/dashboard')}}">Dashboard</a>
        </li>      
       <li>
          <a href="{{URL::to('user/profile/' . Auth::user()->username)}}" class="no-submenu">
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
        
    @endif
      @if ( isset( $retailer ) && ! empty( $retailer ))
        <li class="text-c padding-t20">
          @if ($retailer->image_path)
            <img src="{{{ asset($retailer->image_path)}}}" width="230" height="230">
          @else
            <img src="{{{ asset('assets/img/noimage.jpeg') }}}" width="120" height="120">
          @endif
        </li>
        <li class="padding-l10">
          {{ $retailer->name}}
        </li>
        <li class="padding-l10">
          {{ (isset($retailer->address->address))? $retailer->address->address : ''}}
        </li>
        <li class="padding-l10">
          {{ $retailer->website}}
        </li>
      @endif
    </ul>
@stop