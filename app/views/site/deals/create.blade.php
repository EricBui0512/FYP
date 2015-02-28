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
            <form class="form-horizontal">
               
               <div class="form-group">
                  <label class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-8">
                     <input type="text" placeholder="Name" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-2 control-label">Outlet</label>
                  <div class="col-lg-8">
                     <select name="outlet" class="form-control m-b">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                  	</select>
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