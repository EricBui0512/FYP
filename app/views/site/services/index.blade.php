@extends('site.layouts.retailer')
@section('title')
	List Service
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
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

          <table id="table-ext-11" class="table table-striped table-hover">
             <thead>
                <tr>
                   <th class="col-md-1">ID</th>
                   <th class="col-md-7">Name</th>
                   <th class="col-md-1">Price</th>
                   <th class="col-md-2">Time Operate</th>
                   <th class="col-md-1">Action</th>         
                </tr>
             </thead>
             <tbody>
                @foreach ( $services as $service )
                <tr>
                   	<td>{{ $service->id }}</td>
                   	<td>{{ $service->name }}</td>
                   	<td>{{ $service->price }}</td>
                    <td>{{ $service->time_operate }}</td>   
                   	
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <li><a class="delete" data-action="{{{ URL::to('service/delete')}}}" id="{{{ $service->id }}}" href="#"
                            data-toggle="modal" data-target=".bs-example-modal-sm">Delete</a>
	                          </li>
	                          <li><a href="{{ URL::to('service/' . $service->id . '/edit') }}">Edit</a>
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
            <div class="col-lg-12">{{ $services->links() }}</div>
          </div>
       </div>
	</div>
@stop  
