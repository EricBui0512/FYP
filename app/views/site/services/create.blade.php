@extends('site.layouts.retailer')

@section('container')
	<div class="col-sm-12">
      <div class="panel panel-default">
           <div class="panel-heading">Create Service</div>
           <div class="panel-body">
              <form action="{{ URL::to('service') }}" method="POST">
                 <div data-toggle="wizard" class="form-wizard wizard-horizontal">
                    <!-- START wizard steps indicator-->
                    <ol class="row">
                       <li class="col-lg-3">
                          <h4>Service</h4>
                          <!-- <small class="text-muted">Duis volutpat nunc at ligula tincidunt non aliquam.</small> -->
                       </li>
                       <li class="col-lg-3">
                          <h4>Detail</h4>
                          <!-- <small class="text-muted">Nulla pharetra imperdiet sapien ac faucibus.</small> -->
                       </li>
                       <li class="col-lg-3">
                          <h4>Service Condition</h4>
                          <!-- <small class="text-muted">Sed elementum lorem dolor, id fermentum metus.</small> -->
                       </li>
                       <li class="col-lg-3">
                          <h4>Done!</h4>
                          <!-- <small class="text-muted">Nullam sit amet magna vestibulum libero dapibus iaculis.</small> -->
                       </li>
                    </ol>
                    <!-- END wizard steps indicator-->
                    <!-- START Wizard Step inputs -->
                    <div>
                       <fieldset>
                          <!-- <legend>Service</legend> -->
                          <!-- START row -->
                           <div >
		                        <div class="form-group">
		                           <label>Name</label>
		                           <div class="controls">
		                              <input type="text" placeholder="Name" class="form-control" name="name">
		                           </div>
		                        </div>
		                        <div class="form-group">
		                           <label>Price</label>
		                           <div class="controls">
		                              <input type="text" placeholder="price" class="form-control" name="price">
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
		                  	</div>
              				<!-- END Wizard Step inputs -->
                          <!-- END row -->
                       </fieldset>
                    </div>
                    <!-- END Wizard Step inputs -->
                    <!-- START Wizard Step inputs -->
                    <div>
                       <fieldset>
                          <!-- <legend>Detail</legend> -->
                          <!-- START row -->
                          <div >                           
		                        <div class="form-group">
		                           <label>Sumary</label>
		                           <textarea data-uk-markdownarea="{mode:'tab'}" name="sumary"></textarea>
		                        </div>
		                        <div class="form-group">
		                           <label>Highlights</label>
		                           <textarea data-uk-markdownarea="{mode:'tab'}" name="highlights"></textarea>
		                        </div>
		                        <div class="form-group">
		                           <label>Detailcol</label>
		                           <input type="text" name="detailcol" placeholder="Detailcol" class="form-control">
		                        </div>
		                              </div>
		                              <!-- END row -->
		                           </fieldset>
		                        </div>
		                        <!-- END Wizard Step inputs -->
		                        <!-- START Wizard Step inputs -->
		                        <div>
                       <fieldset>
                            <!-- <legend>Service Condition</legend> -->
                              <!-- START row -->
                            <div>           
		                        <div class="form-group">
		                           <label>Special Condition</label>
		                           <textarea data-uk-markdownarea="{mode:'tab'}" name="specialcondition"></textarea>
		                        </div>
		                        <div class="form-group">
		                           <label>Condition 1</label>
		                           <textarea data-uk-markdownarea="{mode:'tab'}" name="condition1"></textarea>
		                        </div>
		                        <div class="form-group">
		                           <label>Condition 2</label>
		                           <textarea data-uk-markdownarea="{mode:'tab'}" name="condition2"></textarea>
		                        </div>
		                        <div class="form-group">
		                           <label>Deal Condition</label>
		                           <textarea data-uk-markdownarea="{mode:'tab'}" name="dealcondition"></textarea>
		                        </div>
                            </div>
                          <!-- END row -->
                       </fieldset>
                    </div>
                    <!-- END Wizard Step inputs -->
                    <!-- START Wizard Step inputs -->
                    <div>
                       <div class="jumbotron m0">
                          <h2>Done!</h2>
                          <!-- <p>In vulputate mattis ipsum vitae vehicula. Praesent at arcu non arcu convallis pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                          <br>
                          <p>
                             <button type="button" class="btn btn-info bt-spa">Create</button>
                          </p>
                       </div>
                    </div>
                    <!-- END Wizard Step inputs -->
                 </div>
              </form>
           </div>
        </div>
   </div>
@stop