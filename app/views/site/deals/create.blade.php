@extends('site.layouts.retailer')
@section('title')
	Create Deals
@stop
@section('container')
	<div class="col-sm-12">
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">Deals form</div>
         <div class="panel-body">
            <form class="form-horizontal"  method="POST">
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
                     <select name="service" class="form-control m-b" name="service">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Name" class="form-control" name="name">
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
                     <textarea placeholder="Special Request" class="form-control" rows="5" name="specialrequest"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Time Slot</label>
                  <div class="col-lg-8">
                     <input type="date" placeholder="Time Slot" class="form-control" name="timeslot"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Remind Time</label>
                  <div class="col-lg-8">
                     <input type="date" placeholder="Remind Time" class="form-control" name="remindtime"></textarea>
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