@extends('site.layouts.retailer')
@section('container')
	<div class="col-sm-12">
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">Update deal</div>
         <div class="panel-body">
            <form class="form-horizontal"  method="POST" action="{{URL::to('deal/' . $deal->id . '/edit')}}">
               <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
               <div class="form-group">
                  <label class="col-lg-2 control-label">Title</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Title" class="form-control" name="title" value="{{{ Input::old('title', isset($deal) ? $deal->title : null) }}}">
                     {{ $errors->first('title', '<span class="help-inline">:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Service</label>
                  <div class="col-lg-8">
                     {{ Form::select('service_id', $services, isset($deal) ? $deal->service_id : 0, array('class' => 'form-control m-b') ) }}
                     {{ $errors->first('service_id', '<span class="help-inline">:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Amount</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Amount" class="form-control" name="amount" value="{{{ Input::old('amount', isset($deal) ? $deal->amount : null) }}}">
                     {{ $errors->first('amount', '<span class="help-inline">:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Discount</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Discount" class="form-control" name="discount" value="{{{ Input::old('discount', isset($deal) ? $deal->discount : null) }}}">
                     {{ $errors->first('discount', '<span class="help-inline">:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Special Request</label>
                  <div class="col-lg-8">
                     <textarea placeholder="Special Request" class="form-control" rows="5" name="special_request">
                     	{{ isset($deal) ? $deal->special_request : null }}
                     </textarea>
                     {{ $errors->first('special_request', '<span class="help-inline">:message</span>') }}

                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Deal Type</label>
                  <div class="col-lg-8">
                     {{ Form::select('deal_type', $dealType, $deal->deal_type, array('class' => 'form-control'))}}
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Time Slot</label>
                  <div class="col-lg-8">
                     <input type="date" placeholder="Time Slot" class="form-control" name="time_slot" value="{{{ Input::old('time_slot', isset($deal) ? date('m/d/Y', strtotime($deal->time_slot)) : null) }}}">
                     {{ $errors->first('time_slot', '<span class="help-inline">:message</span>') }}

                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Remind Time</label>
                  <div class="col-lg-8">
                     <input type="date" placeholder="Remind Time" class="form-control" name="remind_time" value="{{{ Input::old('remind_time', isset($deal) ? date('m/d/Y', strtotime($deal->remind_time)) : null) }}}">
                     {{ $errors->first('remind_time', '<span class="help-inline">:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                     <button type="submit" class="btn btn-sm bt-spa">Update</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- END panel-->
   </div>
@stop