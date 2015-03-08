@extends('site.layouts.retailer')

{{-- Content --}}
@section('content')
<div class="col-sm-12">
      <!-- START panel-->
    <div class="panel panel-default">
        <div class="panel-heading">Address Form</div>
        <div class="panel-body">
			<table id="addresses" class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="col-md-3">Address</th>
						<th class="col-md-2">District</th>
						<th class="col-md-2">Postal code</th>
						<th class="col-md-2">Created at</th>
						<th class="col-md-2">Updated at</th>
						<th class="col-md-1">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($addresses as $key => $address)
                <tr>
                   	<td>{{$address->address}}</td>
                   	<td>{{$address->district}}</td>
                   	<td>{{$address->postal_code}}</td>
                   	<td>{{$address->created_at}}</td> 
                   	<td>{{$address->updated_at}}</td> 
                   	<td></td>
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <!-- <li><a href="{{URL::to('address/'.$address->id)}}">Delete</a>
	                          </li> -->
	                          <li><a href="{{URL::to('address/$address->id')}}">Edit</a>
	                          </li>
	                        <!--   <li><a href="{{URL::to('address/$address->id')}}">Detail</a>
	                          </li> -->
	                       </ul>
	                    </div>
	                </td>                   
                </tr>
                @endforeach
             </tbody>
			</table>
		</div>
	</div>
</div>
@stop
