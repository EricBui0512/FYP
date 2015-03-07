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
          <table id="table-ext-1" class="table table-bordered table-hover">
             <thead>
                <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Website</th>
                   <td>Phone</td>
                   <th>Create day</th>
                   <th>Action</th>         
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
	                          <li><a href="#">Delete</a>
	                          </li>
	                          <li><a href="{{ URL::to('outlet/' . $outlet->id . '/edit') }}">Edit</a>
	                          </li>
	                          <li><a href="{{URL::to('outlet/detail/1')}}">Detail</a>
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
            <div class="col-lg-2 ">
	            <ul class="pagination pagination-sm">
	               <li class="active"><a href="#">1</a>
	               </li>
	               <li><a href="#">2</a>
	               </li>
	               <li><a href="#">3</a>
	               </li>
	               <li><a href="#">»</a>
	               </li>
	            </ul>
	        </div>
             <div class="col-lg-8"></div>
             
          </div>
       </div>
	</div>
@stop  
