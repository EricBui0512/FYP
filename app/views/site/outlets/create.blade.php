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
                        <form class="form-horizontal">
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Country</label>
                              <div class="col-lg-2">
                                <select name="account" class="form-control m-b">
	                                <option>Option 1</option>
	                                <option>Option 2</option>
	                                <option>Option 3</option>
	                                <option>Option 4</option>
                              	</select>
                              </div>
                              <label class="col-md-1 control-label">City</label>
                              <div class="col-lg-2">
                                <select name="account" class="form-control m-b">
	                                <option>Option 1</option>
	                                <option>Option 2</option>
	                                <option>Option 3</option>
	                                <option>Option 4</option>
                              	</select>
                              </div>
                              <label class="col-lg-1 control-label">Address</label>
                              <div class="col-lg-2">
                                <select name="account" class="form-control m-b">
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
                                 <input type="text" placeholder="Name" class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-lg-2 control-label">Website</label>
                              <div class="col-lg-8">
                                 <input type="url" placeholder="Website" class="form-control">
                              </div>
                           </div>
                           
                           <div class="form-group">
	                           <label class="col-sm-2 control-label">Description
	                              
	                           </label>
	                           <div class="col-sm-8">
	                              <textarea data-uk-markdownarea="{mode:'tab'}">Description</textarea>
	                           </div>
                        	</div>
                        	<div class="form-group">
	                           <label class="col-sm-2 control-label">Sumary
	                              
	                           </label>
	                           <div class="col-sm-8">
	                              <textarea data-uk-markdownarea="{mode:'tab'}">Sumary</textarea>
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
