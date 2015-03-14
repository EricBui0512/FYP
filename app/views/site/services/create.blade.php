@extends('site.layouts.retailer')

@section('container')
  <div class="col-sm-12">
      <div class="panel panel-default">
           <div class="panel-heading">Create Service</div>
           <div class="panel-body">

              <form method="POST" action="{{URL::to('service/create')}}">
              <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

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
                                  {{ Form::Select( 'outlet_id', $outlets, 0, array('class' => 'form-control m-b'))}}
                          
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
                               <label>Summary</label>
                               <textarea name="summary" class="ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                               <label>Highlights</label>
                               <textarea  name="highlights" class="ckeditor"></textarea>
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
                               <textarea  name="special_condition" class="ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                               <label>Condition 1</label>
                               <textarea  name="condition1" class="ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                               <label>Condition 2</label>
                               <textarea  name="condition2" class="ckeditor"></textarea>
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
                             <button type="submit" class="btn btn-info bt-spa">Create</button>
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