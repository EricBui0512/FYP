@extends('site.layouts.retailer')

{{-- Content --}}
@section('content')
<div class="col-sm-12">
      <!-- START panel-->
    <div class="panel panel-default">
        <div class="panel-heading">{{ $deal->title }}</div>
        <div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="col-md-2">Consumer Email</th>
						<th class="col-md-1">Qty</th>
						<th class="col-md-1">Amount</th>
						<th class="col-md-2">Payment Type</th>
						<th class="col-md-2">Payment Date</th>
						<th class="col-md-1">Payment Status</th>
						<th class="col-md-1">Status</th>
						<th class="col-md-1">Created at</th>
						<th class="col-md-1">Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($trans as $key => $tran)
                <tr>
                   	<td>{{$tran->consumer_email}}</td>
                   	<td>{{$tran->qty}}</td>
                   	<td>{{$tran->amount}}</td>
                   	<td>{{$tran->payment_type}}</td> 
                   	<td>{{$tran->payment_date}}</td> 
                   	<td>{{$tran->payment_status}}</td> 
                   	<td>{{$tran->status}}</td> 
                   	<td>{{$tran->created_at}}</td> 
                   	<td class="text-center">
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <!-- <li><a href="{{URL::to('transaction/'.$tran->id)}}">Delete</a>
	                          </li> -->
	                          <li><a href="{{URL::to('transaction/$tran->id')}}">Edit</a>
	                          </li>
	                        <!--   <li><a href="{{URL::to('transaction/$tran->id')}}">Detail</a>
	                          </li> -->
	                       </ul>
	                    </div>
	                </td>                   
                </tr>
                @endforeach
             </tbody>
			</table>
		</div>
		<div class="panel-footer">
          <div class="row">
            <div class="col-lg-12 text-center">
              {{ $trans->links() }}
	          </div>
             
          </div>
       </div>
	</div>
</div>
@stop
