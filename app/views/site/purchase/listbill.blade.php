@extends('site.layouts.customer')
@section('content')
<!-- START row-->
<div class="row">
       <div class="panel panel-default">
       <div class="panel-heading">
            <div class="panel-title">Transactions history</div>
        </div>
       <!-- START table-responsive-->
       <div class="table-responsive">
          <table id="table-ext-11" class="table table-striped table-hover">
             <thead>
                <tr>
                   <th class="col-md-1">ID</th>
                   <th class="col-md-7">Title</th>
                   <th class="col-md-1">Quanity</th>
                   <th class="col-md-2">Total</th>
                   <th class="col-md-1">pay</th>         
                   <th class="col-md-1">Action</th>         
                </tr>
             </thead>
             <tbody>
               
                <tr>
                   	<td>ssss</td>
                   	<td>sss</td>
                   	<td>sss</td>
                    <td>ssss</td>   
                    <td>ssss</td>   
                   	
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <!-- <li><a href="#">Delete</a>
	                          </li> -->
	                          <li><a href="{{ URL::to('service/' . '/edit') }}">Edit</a>
	                          </li>
	                          <!-- <li><a href="{{URL::to('service/detail/1')}}">Detail</a>
	                          </li> -->
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
            <div class="col-lg-12"></div>
          </div>
       </div>
	</div>
      
</div>
    <!-- END row-->
@stop