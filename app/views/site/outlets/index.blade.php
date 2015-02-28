@extends('site.layouts.retailer')
@section('title')
	List Outlet
@stop
@section('container')
	<div class="panel panel-default">
       <div class="panel-heading">List Outlets
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
                   <th>Picture</th>
                   <th>Name</th>
                   <th>Website</th>
                   <td>Rate</td>
                   <th>Create day</th>
                   <th>Action</th>         
                </tr>
             </thead>
             <tbody>
                <tr>
                   	<td>1</td>
                   	<td>
                      <div class="media">
                         <img src="app/img/user/01.jpg" alt="Image" class="img-responsive img-circle">
                      </div>
                   	</td>
                   	<td>@twitter</td>
                   	<td>Larry</td>   
                   	<td>
	                   	<div class="progress progress-striped progress-xs">
	                       <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-info progress-50">
	                          <span class="sr-only">50% Complete</span>
	                       </div>
	                    </div>
                   	</td>
                   	<td>10/2/2015</td>
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <li><a href="#">Delete</a>
	                          </li>
	                          <li><a href="#">Edit</a>
	                          </li>
	                          <li><a href="{{URL::to('outlet/detail/1')}}">Detail</a>
	                          </li>
	                       </ul>
	                    </div>
	                </td>                   
                </tr>
                <tr>
                   <td>2</td>
                   <td>
                      <div class="media">
                         <img src="app/img/user/02.jpg" alt="Image" class="img-responsive img-circle">
                      </div>
                   </td>
                   <td>@mdo</td>
                   <td>Mark</td>
                  
                   <td>
                   		<div class="progress progress-striped progress-xs">
                       		<div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-info progress-50">
                          	<span class="sr-only">50% Complete</span>
                       </div>
                    </div>
                   </td>
                   <td>10/2/2015</td>
                   <td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <li><a href="#">Delete</a>
	                          </li>
	                          <li><a href="#">Edit</a>
	                          </li>
	                          <li><a href="{{URL::to('outlet/detail/1')}}">Detail</a>
	                          </li>
	                       </ul>
	                    </div>
	                </td>       
                   
                </tr>
                <tr>
                   <td>3</td>
                   <td>
                      <div class="media">
                         <img src="app/img/user/03.jpg" alt="Image" class="img-responsive img-circle">
                      </div>
                   </td>
                   <td>@fat</td>
                   <td>Jacob</td>
                   <td>
                   		<div class="progress progress-striped progress-xs">
                       		<div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-info progress-50">
                          	<span class="sr-only">50% Complete</span>
                       </div>
                   </td>
                   <td>10/2/2015</td>
                   <td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <li><a href="#">Delete</a>
	                          </li>
	                          <li><a href="#">Edit</a>
	                          </li>
	                          <li><a href="{{URL::to('outlet/detail/1')}}">Detail</a>
	                          </li>
	                       </ul>
	                    </div>
	                </td>       
                   
                </tr>
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
