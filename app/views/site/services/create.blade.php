@extends('site.layouts.retailer')
@section('title')
	Create Service
@stop
@section('container')
	<div class="col-sm-12">
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">Service Form</div>
         <div class="panel-body">
            <form action="/" method="POST">
               <div data-toggle="wizard" class="form-wizard">
                  
                  <div>
                     <legend>Service</legend>
                     <fieldset>
                        <div class="form-group">
                           <label>Name</label>
                           <div class="controls">
                              <input type="text" placeholder="Name" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Price</label>
                           <div class="controls">
                              <input type="text" placeholder="price" class="form-control">
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Outlet</label>
                           <div class="controls">
                              	<select name="outlet" class="form-control m-b">
			                        <option>Option 1</option>
			                        <option>Option 2</option>
			                        <option>Option 3</option>
			                        <option>Option 4</option>
		                  		</select>
                           </div>
                        </div>
                     </fieldset>
                  </div>
                  <!-- END Wizard Step inputs -->
                  <!-- START Wizard Step inputs -->
                  <div>
                     <legend>Detail</legend>
                     <fieldset>
                        <div class="form-group">
                           <label>Sumary</label>
                           <textarea data-uk-markdownarea="{mode:'tab'}"></textarea>
                        </div>
                        <div class="form-group">
                           <label>Highlights</label>
                           <textarea data-uk-markdownarea="{mode:'tab'}"></textarea>
                        </div>
                        <div class="form-group">
                           <label>Detailcol</label>
                           <input type="text" name="last-name" placeholder="Detailcol" class="form-control">
                        </div>
                     </fieldset>
                  </div>
                  <!-- END Wizard Step inputs -->
                  <!-- START Wizard Step inputs -->
                  <div>
                     <legend>Service Condition</legend>
                     <fieldset>
                        <div class="form-group">
                           <label>Special Condition</label>
                           <input type="text" name="email" placeholder="Special Condition" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Condition 1</label>
                           <input type="text" name="email" placeholder="Condition 1" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Condition 2</label>
                           <input type="text" name="email" placeholder="Condition 2" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Deal Condition</label>
                           <input type="text" name="email" placeholder="Deal Condition" class="form-control">
                        </div>
                        
                     </fieldset>
                  </div>
                  <!-- END Wizard Step inputs -->
                  <!-- START Wizard Step inputs -->
                  <div>
                     <legend>Save</legend>
                     <div class="jumbotron m0">
                        <h3 class="mt0">Done!</h3>       
                        <p class="m0">
                           <button type="submit" class="btn btn-sm bt-spa">Create</button>
                        </p>
                     </div>
                  </div>
                  <!-- END Wizard Step inputs -->
               </div>
            </form>
         </div>
      </div>
      <!-- END panel -->
   </div>
@stop