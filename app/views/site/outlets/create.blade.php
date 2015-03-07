@extends('site.layouts.retailer')
@section('title')
	Create Outlet
@stop
@section('container')
	<div class="col-sm-12">
                  <!-- START panel-->
                  <div class="panel panel-default">
                     <div class="panel-heading">{{$title}}</div>
                     <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{URL::to('outlet')}}">
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
                              <label class="col-lg-2 control-label">Retailer Name</label>
                              <div class="col-lg-8">
                                 {{ Form::select('retailer_id', $outlets, 0, array('class' => 'form-control')) }}
                              </div>
                           </div>

                           <div class="form-group">
                              <label class="col-lg-2 control-label">Name</label>
                              <div class="col-lg-8">
                                 <input type="text" placeholder="Name" name="name" class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Website</label>
                              <div class="col-lg-8 ">
                                 <input type="url" placeholder="Website" class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              {{ Form::label('image', 'Image',array('class'=>'col-lg-2 control-label')) }}
                               <div class="col-lg-10">
                                <input multiple class="image" type="file" name="images" data-url="{{URL::to('outlet/uploadimage')}}" >            
                                 <div id="progress">
                                   <div class="bar" style="width: 0%;"></div>
                                   <div >
                                   <p class="ulimage">0%</p> 
                                   </div>
                                  {{ $errors->first('image',  '<div class="alert alert-danger">:message</div>') }}
                                   </div>
                               </div>
                           </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Outlet Register ID</label>
                              <div class="col-lg-8">
                                 <input type="text" placeholder="Outlet Register ID" name="outlet_register_id" class="form-control">
                              </div>
                           </div>

                           <div class="form-group">
	                           <label class="col-sm-2 control-label">Description
	                              
	                           </label>
	                           <div class="col-sm-8">
	                              <textarea class="form-control" name="full_description" rows="5">Description</textarea>
	                           </div>
                        	</div>
                        	<div class="form-group height-200">
	                           <label class="col-sm-2 control-label">Sumary
	                              
	                           </label>
	                           <div class="col-sm-8 ">
	                              <textarea class="form-control" name="summary" rows="5">Sumary</textarea>
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