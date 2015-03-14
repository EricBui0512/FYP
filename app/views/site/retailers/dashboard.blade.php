@extends('site.layouts.retailer')
@section('title')
List Outlet
@stop
@section('container')
<div class="content-wrapper">
  @foreach ( $outletsArray as $outlet )
  
    <h3>{{ $outlet['name'] }}</h3>
    <fieldset class="row">
      @foreach ( $outlet['deal'] as $deal )
        <div class="col-md-4">
          <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" data-delay="100" class="panel widget anim-running anim-done" style="">
             <div class="panel-body bg-primary">
                <div class="row row-table row-flush">
                   <div class="col-xs-11">
                      <p ><a class="mb0 bg-primary" href="{{{ URL::to('deal/tran/' . $deal->id)}}}">{{ $deal->title }}</a>
                      </p>
                   </div>
                </div>
             </div>
             <div class="panel-body">
                <!-- Bar chart-->
                <div class="text-center">
                  <small>{{ $deal->tran_day}} transaction on day</small> &nbsp;|&nbsp;
                  <small>{{ $deal->tran_week}} transaction on week</small>
                </div>
             </div>
          </div>
        
        </div>
      @endforeach
    </fieldset>
  @endforeach
  </div>
<!-- </section> -->
@stop