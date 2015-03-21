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
          <input type="hidden" value="{{{ Session::getToken() }}}" name="_token" >
          <table class="table table-striped table-hover">
             <thead>
                <tr>
                   <th class="col-md-1">ID</th>
                   <th class="col-md-6">Title</th>
                   <th class="col-md-1">Amount</th>
                   <th class="col-md-1">Discount</th>
                   <th class="col-md-1">Status</th>
                   <th class="col-md-2">Time Slot</th>
                   <th class="col-md-1">Action</th>         
                </tr>
             </thead>
             <tbody>
                @foreach ( $deals as $deal )
                <tr>
                   	<td>{{ $deal->id }}</td>
                   	<td>{{ $deal->title }}</td>
                   	<td>{{ $deal->amount }}</td>
                    <td>{{ $deal->discount }}</td>   
                    <td>{{ $deal->status }}</td>   
                   	
                   	<td>{{ $deal->time_slot }}</td>
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <li>
                              <a class="delete" data-action="{{{ URL::to('deal/delete')}}}" id="{{{ $deal->id }}}" href="javascript:void(0)">Delete</a>
                            </li>
	                          <li><a href="{{ URL::to('deal/' . $deal->id . '/edit') }}">Edit</a>
	                          </li>
	                          <!-- <li><a href="{{URL::to('deal/detail/1')}}">Detail</a> -->
	                          </li>
	                       </ul>
	                    </div>
	                </td>                   
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
