@extends('site.layouts.retailer')
@section('title')
	List deal
@stop
@section('container')
	<div class="panel panel-default">
       <div class="panel-heading">{{$title}}
          <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
             <em class="fa fa-times"></em>
          </a>
          <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
             <em class="fa fa-minus"></em>
          </a>
       </div>
       <!-- START table-responsive-->
       <div class="table-responsive">
          <table class="table table-striped table-hover">
             <thead>
                <tr>
                   <th class="col-md-1">ID</th>
                   <th class="col-md-6">Title</th>
                   <th class="col-md-1">Cancellation</th>
                </tr>
             </thead>
             <tbody>
                @foreach ( $deals as $deal )
                <tr>
                   	<td>{{ $deal->id }}</td>
                   	<td>{{ $deal->title }}</td>
                   	<td>{{ $deal->cancellation }}</td>
                </tr>
                @endforeach
             </tbody>
          </table>
       </div>
       <!-- END table-responsive-->
       <div class="panel-footer">
          <div class="row">
             <div class="col-lg-8">{{ $deals->links() }}</div>
          </div>
       </div>
	</div>
@stop  
