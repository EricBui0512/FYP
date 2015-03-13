@extends('site.layouts.retailer')
@section('container')
<div class="col-sm-12">
	<div class="panel panel-default">
		<div class="panel-heading">Create Service</div>
		<div class="panel-body">
			<form method="POST" action="{{URL::to('service/' . $service->id)}}">
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
										<input type="text" placeholder="Name" class="form-control" name="name" value="{{{ Input::old('name', isset($service) ? $service->name : null) }}}">
										{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
									</div>
								</div>
								<div class="form-group">
									<label>Price</label>
									<div class="controls">
										<input type="text" placeholder="price" class="form-control" name="price" value="{{{ Input::old('price', isset($service) ? $service->price : null) }}}">
										{{ $errors->first('price', '<span class="help-inline">:message</span>') }}
									</div>
								</div>
								<div class="form-group">
									<label>Outlet</label>
									<div class="controls">
										{{ Form::Select( 'outlet_id', $outlets, (isset($service->outlet_id))?$service->outlet_id:0, array('class' => 'form-control m-b'))}}
										{{ $errors->first('outlet_id', '<span class="help-inline">:message</span>') }}
									</div>
								</div>
								<div class="form-group">
						            {{ Form::label('image', 'Image',array('class'=>'col-lg-2 control-label')) }}
						            <div class="col-lg-10">
						              {{ $imageForm }}
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
									<textarea class="ckeditor" name="summary">
									{{ Input::old('summary',isset($service->detail->summary) ? $service->detail->summary:'')}}
									</textarea>
									{{ $errors->first('summary', '<span class="help-inline">:message</span>') }}
								</div>
								<div class="form-group">
									<label>Highlights</label>
									<textarea class="ckeditor" name="highlights">
									{{ Input::old('highlights',isset($service->detail->highlights) ? $service->detail->highlights:'')}}
									</textarea>
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
									<textarea class="ckeditor" name="special_condition">
										{{ Input::old('special_condition',isset($service->condition->special_condition) ? $service->condition->special_condition:'')}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Condition 1</label>
									<textarea class="ckeditor" name="condition1">
										{{ Input::old('condition1',isset($service->condition->condition1) ? $service->condition->condition1:'')}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Condition 2</label>
									<textarea class="ckeditor" name="condition2">
										{{ Input::old('condition2',isset($service->condition->condition2) ? $service->condition->condition2:'')}}
									</textarea>
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