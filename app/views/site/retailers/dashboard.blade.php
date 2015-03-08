@extends('site.layouts.retailer')
@section('title')
List Outlet
@stop
@section('container')
<section class="col-md-12">
    @foreach ( $deals as $deal )
    <div class="col-md-4">
      <div class="panel panel-default">
        
        <!-- START list group-->
        <div class="list-group">
          <!-- START list group item-->
          <div class="list-group-item">
            <div class="media">
              <div class="media-body clearfix">
                <div class="media-heading text-warning m0">{{ $deal->title }}</div>
                <div>
                  <img height="308" width="308" src="/{{{ $deal->image_path }}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <!-- END list group item-->
        </div>
        <!-- END list group-->
        <!-- START panel footer-->
        <div class="panel-footer clearfix">
          <a href="javascript:void(0);" class="pull-left">
            <small>{{ $deal->tran}} Transaction</small>
          </a>
        </div>
        <!-- END panel-footer-->
      </div>
    </div>
  @endforeach
</section>
@stop