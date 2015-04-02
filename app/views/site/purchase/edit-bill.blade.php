@extends('site.layouts.customer')
@section('content')
<!-- START row-->
    <div class="row">
       <div class="col-md-12">
         
             <!-- START panel-->
             <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-title">Bill service</div>
                </div>
                <div class="panel-body">
	                <div class="row pa20">
	                	<legend>Your account details</legend>
	                	@if (!Auth::check())
		                	<h5 class="fwb">When you are already registered, please login directly here</h5>
		                   	<form method="post" action="#" data-parsley-validate="" novalidate="">
			                   <div class="col-sm-4 pl0">
			                   		<input type="text" name="username" required class="form-control" placeholder="username">
			                   	</div>
		                       <div class="col-sm-4 ">
		                       		<input id="id-password" type="password" name="password" required class="form-control" placeholder="pass">
		                        </div>
		                        <div class="col-sm-3 ">
		                          	<button type="submit" class="btn btn-primary">Login</button>
		                        </div>
		                   	</form>
		                @else
		                <div class="row">
		                	<label class="control-label col-md-1">Name:</label>
		                	<div class="col-md-8">{{Auth::user()->username}}</div>
		                </div>
		                <div class="row">
		                	<label class="control-label col-md-1">Email</label>
		                	<div class="col-md-8">{{Auth::user()->email}}</div>
		                </div>
		                	
	                   	@endif
	                </div>
	                <div class="row pa20">
	                <legend>Enter your reservation guarantee</legend>
	                	<form method="post" action="{{URL::to('user/transaction/edit')}}" data-parsley-validate="" novalidate="" >
	                		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
	                		<input type="hidden" name="deal_id" value="{{$detail->id}}">
	                		<input type="hidden" name="id" value="{{$transactions->id}}">
	                		<input type="hidden" name="amount" value="{{$detail->discount}}">
		                   	<div class="row">
			                   	<div class="col-md-3">
				                   	<div class="form-group">
				                      <label class="control-label">Phone number *</label>
				                      <input type="text" name="phone_number" required class="form-control col-md-6" placeholder="(+84)xxxx.xxxx.xxxx" value="{{$transactions->phone_number}}">
				                   	</div>
				                   	<div class="form-group">
				                      <label class="control-label">Quanity *</label>
				                      <input id="qty" type="number" name="qty" required class="form-control" value="{{$transactions->qty}}">
				                   	</div>
			                   	</div>
			                   	<div class="col-md-1"></div>
			                   	<div class="col-md-3">
			                   		<img src="{{asset($detail->big_img)}}" alt="" class="img-thumbnail">
			                   		
			                   	</div>
			                   	<div class="col-md-5">
			                   		<p class="fs14">
			                   			{{$detail->title}}
			                   		</p>
			                   		<p>
			                   			Prices: {{$detail->discount}}$
			                   		</p>
			                   	</div>
		                   	</div>
		                   	<br>
		                   	<div class="row ">
			                    <div class="panel-footer">
				                   <div class="clearfix">
				                      <!-- <div>
				                         <div class="checkbox c-checkbox">
				                            <label>
				                               <input type="checkbox" name="agreements" required data-parsley-error-message="Please read and agree the terms">
				                               <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
				                            </label>
				                         </div>
				                      </div> -->
				                      <div >
				                         <button type="submit" class="btn btn-primary">Update</button>
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