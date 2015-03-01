@extends('site.layouts.retailer')
@section('title')
	Create Outlet
@stop
@section('container')
	<div class="col-sm-12">
                  <!-- START panel-->
                  <div class="panel panel-default">
                     <div class="panel-heading">Outlet form</div>
                     <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{URL::to('outlet/create')}}">
                        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Country</label>
                              <div class="col-lg-2">
                                 {{ Form::select('country_id', $countries,257,array('class'=>'form-control m-b','id'=>'country_id','name'=>'country') )}}
                              </div>
                              <label class="col-md-1 control-label">City</label>
                              <div class="col-lg-2">
                                {{ Form::select('city_id', $cities,0,array('class'=>'form-control m-b','name'=>'city_id','id'=>'city_id') )}}
                              </div>
                              <label class="col-lg-1 control-label">Address</label>
                              <div class="col-lg-2">
                                <select name="address_id" class="form-control m-b" id="address_id">
	                               
                              	</select>
                              </div>
                               <a href="" class="col-lg-1  icon-add"><em class="fa fa-plus"></em></a><small>&nbsp; new address</small>
                              
                           </div>
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Name</label>
                              <div class="col-lg-8">
                                 <input type="text" placeholder="Name" class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Website</label>
                              <div class="col-lg-8 ">
                                 <input type="url" placeholder="Website" class="form-control">
                              </div>
                           </div>
                           
                           <div class="form-group">
	                           <label class="col-sm-2 control-label">Description
	                              
	                           </label>
	                           <div class="col-sm-8">
	                              <textarea class="form-control"  rows="5">Description</textarea>
	                           </div>
                        	</div>
                        	<div class="form-group height-200">
	                           <label class="col-sm-2 control-label">Sumary
	                              
	                           </label>
	                           <div class="col-sm-8 ">
	                              <textarea class="form-control" rows="5">Sumary</textarea>
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
{{-- Scripts --}}
@section('script')
<script src="{{asset('assets/js/retailer/address.js')}}"></script>
@stop