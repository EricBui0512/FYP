@extends('site.layouts.retailer')
@section('title')
List Outlet
@stop
@section('container')
<div class="content-wrapper">
  <h3>Transaction</h3>
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Transaction</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="text-lg p text-center">{{ $thisWeek->this_tran_week }}</div>
                    <h3 class="media p mt0 text-center">This Week</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- END panel-->
          </div>
          <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="text-lg p text-center">{{ $pastWeek->past_tran_week }}</div>
                    <h3 class="media p mt0 text-center">Past Week</h3>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- END panel-->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Income</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <h3 class="media p">${{ $thisWeek->this_amount_week }}</h3>
                    <h3 class="media p mt0">This Week</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- END panel-->
          </div>
          <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <h3 class="media p">${{ $pastWeek->past_amount_week }}</h3>
                    <h3 class="media p mt0">Past Week</h3>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- END panel-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <div class="btn-group chart">
    <button type="button" class="btn btn-default" id="day">Day</button>
    <button type="button" class="btn btn-default" id="week">Week</button>
    <button type="button" class="btn btn-default" id="month">Month</button>
  </div>
  <div id="chartdiv" style="width: 100%; height: 400px;"></div>
  <br/>
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
          <small>{{ $deal->tran_day}} transaction Today</small> &nbsp;|&nbsp;
          <small>{{ $deal->tran_week}} transaction on Week</small>
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