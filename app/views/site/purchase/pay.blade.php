@extends('site.layouts.customer')
@section('content')
<!-- START row-->
    <div class="row">
       <div class="col-md-12">
         
             <!-- START panel-->
             <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-title">Pay</div>
                </div>
                <div class="panel-body">
	                
	                <div class="row pa20">
	                <h3>Do you want pay now!</h3>
	                	<form method="post" action="{{URL::to('payment')}}" data-parsley-validate="" novalidate="" >
	                		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
	                		<input type="hidden" name="total" value="{{ $bill->total }}">
	                		<input type="hidden" name="qty" value="{{ $bill->qty }}">
	                		<input type="hidden" name="price" value="{{ $bill->amount }}">
	                		<input type="hidden" name="bill_id" value="{{ $bill->id }}">
	                		<input type="hidden" name="service_name" value="{{ Deal::find($bill->deal_id)->title; }}">
		                   	<div class="row ">
			                    <div class="panel-footer">
				                   <div class="clearfix">
				                      <div >
				                         <button type="submit" class="btn btn-primary">Pay</button>
				                         <a href="{{URL::to('user/transaction')}}" class="btn btn-default">Pay later</a>
				                      </div>
				                   </div>
		                		</div>
	                		</div>
                   		</form>
	                </div>
                </div>
              
             <!-- END panel-->
          
       </div>
      
    </div>
    <!-- END row-->
@stop