@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

	{{-- Create address Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($address)){{ URL::to('admin/addresses/' . $address->id . '/edit') }} @else {{ URL::to('admin/addresses/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->
		<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-basic" data-toggle="tab">Basic info</a></li>
			<li><a href="#tab-company" data-toggle="tab">Company info</a></li>
			<li><a href="#tab-location" data-toggle="tab">Location</a></li>
		</ul>
		<!-- ./ tabs -->
		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- Service tab -->
			<div class="tab-pane active" id="tab-basic">

				<!-- Distric -->
				<div class="form-group {{{ $errors->has('retailer_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="district">Retailer Name</label>
					<div class="col-md-10">
						{{ Form::Select( 'retailer_id', $retailers, (isset($outlet->retailer_id))?$outlet->retailer_id:0, array('class' => 'form-control m-b'))}}
						{{ $errors->first('retailer_id', '<span class="help-inline">:message</span>') }}</div>
				</div>
				<!-- ./ Distric -->

				<!-- country -->
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="name">Name</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', isset($outlet) ? $outlet->name : null) }}}" />
						{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ country -->

				<!-- city -->
				<div class="form-group {{{ $errors->has('website') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="website">Website</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="website" id="website" value="{{{ Input::old('website', isset($outlet) ? $outlet->website : null) }}}" />
						{{ $errors->first('website', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ city -->
					
					
				<!-- Images -->
				<div class="form-group">
		            {{ Form::label('image', 'Image',array('class'=>'col-lg-2 control-label')) }}
		            <div class="col-lg-10">
		              {{ $imageForm }}
		            </div>
	          	</div>
				<!-- ./ Images -->

			</div>
			<!-- ./ Service tab -->

			<!-- Detail tab -->
			<div class="tab-pane" id="tab-company">

				<div class="form-group {{{ $errors->has('outlet_register_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="outlet_register_id">Outlet Register ID</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="outlet_register_id" id="outlet_register_id" value="{{{ Input::old('outlet_register_id', isset($outlet) ? $outlet->outlet_register_id : null) }}}" />
						{{ $errors->first('outlet_register_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>

				<div class="form-group {{{ $errors->has('phone') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="phone">Phone</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="phone" id="phone" value="{{{ Input::old('phone', isset($outlet) ? $outlet->phone : null) }}}" />
						{{ $errors->first('phone', '<span class="help-inline">:message</span>') }}
					</div>
				</div>

				<!-- summary -->
				<div class="form-group {{{ $errors->has('description') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="description">Description</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="description" cols="75" rows="5">
							{{ Input::old('description',isset($service->detail->description) ? $service->detail->description:'')}}
						</textarea>
						{{ $errors->first('description', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ summary -->

				<!-- highlights -->
				<div class="form-group {{{ $errors->has('summary') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="summary">Summary</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="summary" cols="75" rows="5">
							{{ Input::old('summary',isset($service->detail->summary) ? $service->detail->summary:'')}}
						</textarea>
						{{ $errors->first('summary', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ highlights -->
					
			</div>
			<!-- ./ detail tab -->

			<!-- condition tab -->
			<div class="tab-pane" id="tab-location">
				<!-- special_condition -->
				<div class="form-group {{{ $errors->has('special_condition') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="special_condition">Special Condition</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="special_condition" cols="75" rows="5">
							{{ Input::old('special_condition',isset($service->detail->special_condition) ? $service->detail->special_condition:'')}}
						</textarea>
						{{ $errors->first('special_condition', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ special_condition -->

				<!-- condition1 -->
				<div class="form-group {{{ $errors->has('condition1') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="condition1">Condition1</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="condition1" cols="75" rows="5">
							{{ Input::old('condition1',isset($service->detail->condition1) ? $service->detail->condition1:'')}}
						</textarea>
						{{ $errors->first('condition1', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ condition1 -->

				<!-- condition2 -->
				<div class="form-group {{{ $errors->has('condition2') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="condition2">Condition2</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="condition2" cols="75" rows="5">
							{{ Input::old('condition2',isset($service->detail->condition2) ? $service->detail->condition2:'')}}
						</textarea>
						{{ $errors->first('condition2', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ condition2 -->
					
			</div>
			<!-- ./ condition tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">OK</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
{{-- Scripts --}}
@section('scripts')
<script src="{{asset('assets/js/admin/address-list.js')}}"></script>
@stop