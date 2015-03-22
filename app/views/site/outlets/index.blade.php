@extends('site.layouts.retailer')
@section('title')
	List Outlet
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
          <table class="table table-striped table-hover">
             <thead>
                <tr>
                   <th class="col-md-1">ID</th>
                   <th class="col-md-4">Name</th>
                   <th class="col-md-3">Website</th>
                   <th class="col-md-1">Phone</th>
                   <th class="col-md-2">Create day</th>
                   <th class="col-md-1">Action</th>         
                </tr>
             </thead>
             <tbody>
                @foreach ( $outlets as $outlet )
                <tr>
                   	<td>{{ $outlet->id }}</td>
                   	<td>{{ $outlet->name }}</td>
                   	<td>{{ $outlet->website }}</td>
                    <td>{{ $outlet->phone }}</td>   
                   	
                   	<td>{{ $outlet->created_at }}</td>
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <li><a class="delete" data-action="{{{ URL::to('outlet/delete')}}}" id="{{{ $outlet->id }}}" href="#"
                            data-toggle="modal" data-target=".bs-example-modal-sm">Delete</a>
                            </li>
	                          <li><a href="{{ URL::to('outlet/' . $outlet->id . '/edit') }}">Edit</a>
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
            <div class="col-lg-12 text-center">
              {{ $outlets->links() }}
	          </div>
             
          </div>
       </div>
	</div>
@stop  
