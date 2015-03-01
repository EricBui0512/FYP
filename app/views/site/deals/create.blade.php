@extends('site.layouts.retailer')
@section('container')
	<div class="col-sm-12">
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">Deals form</div>
         <div class="panel-body">
            <form class="form-horizontal"  method="POST" action="{{URL::to('deal/create')}}">
               <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
               <div class="form-group">
                  <label class="col-lg-2 control-label">Title</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Title" class="form-control" name="title">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Service</label>
                  <div class="col-lg-8">
                     {{ Form::select('service_id', $services, 0, array('class' => 'form-control m-b') ) }}
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Amount</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Amount" class="form-control" name="amount">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Discount</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Discount" class="form-control" name="discount">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Special Request</label>
                  <div class="col-lg-8">
                     <textarea placeholder="Special Request" class="form-control" rows="5" name="special_request"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Time Slot</label>
                  <div class="col-lg-8">
                     <input type="date" placeholder="Time Slot" class="form-control" name="time_slot"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Remind Time</label>
                  <div class="col-lg-8">
                     <input type="date" placeholder="Remind Time" class="form-control" name="remind_time"></textarea>
                  </div>
               </div>
               
                              
               <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                     <button type="submit" class="btn btn-sm bt-spa">Create</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- END panel-->
   </div>
@stop