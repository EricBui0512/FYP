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
                   <th class="col-md-7">Title</th>
                   <th class="col-md-1">Quanity</th>
                   <th class="col-md-2">Total</th>
                   <th class="col-md-1">Payment Status</th>         
                   <th class="col-md-1">Action</th>         
                </tr>
             </thead>
             <tbody>
              @foreach ($transactions as $key => $transaction)         
                <tr>
                 	<td>{{Deal::find($transaction->deal_id)->title}}</td>
                 	<td>{{$transaction->qty}}</td>
                  <td>{{$transaction->total}}</td>   
                  <td>
                    @if($transaction->payment_status)
                      Paid
                    @else
                      Unknown
                    @endif
                  </td>   	
                 	<td class="text-center">
                      @if(!$transaction->payment_status)
	                    <div class="btn-group">
	                       <a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
	                          <em class="fa fa-angle-down"></em>Action</a>
	                       <ul class="dropdown-menu pull-right text-left">
	                          <!-- <li><a href="#">Delete</a>
	                          </li> -->
                            <li>
                               <a href="{{ URL::to('user/transaction/edit/' .$transaction->id) }}">Edit</a>
                            </li>
                            <li>
                               <a href="{{ URL::to('purchase/pay/'.$transaction->id) }}">Pay</a>
                            </li>
	                          <!-- <li><a href="{{URL::to('service/detail/1')}}">Detail</a>
	                          </li> -->
	                       </ul>
	                    </div>
                      @endif
                      </td>                   
                </tr> 
              @endforeach
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