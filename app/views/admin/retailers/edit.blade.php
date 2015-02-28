@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	{{-- Create Country Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($retailer)){{ URL::to('admin/retailers/' . $retailer->id . '/edit') }} @else {{ URL::to('admin/retailers/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Name -->
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="name">Name</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', isset($retailer) ? $retailer->name : null) }}}" />
						{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Name -->

				<!-- Name -->
				<div class="form-group {{{ $errors->has('company_register_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="company_register_id">Company Register ID</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="company_register_id" id="company_register_id" value="{{{ Input::old('company_register_id', isset($retailer) ? $retailer->company_register_id : null) }}}" />
						{{ $errors->first('company_register_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Name -->
				
				<!-- Website -->
				<div class="form-group {{{ $errors->has('website') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="website">Website</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="website" id="website" value="{{{ Input::old('website', isset($retailer) ? $retailer->website : null) }}}" />
						{{ $errors->first('website', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Website -->


				<!-- country -->
				<div class="form-group {{{ $errors->has('country_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="country_id">Country</label>
					<div class="col-md-10">
						{{ Form::select('country_id', $countries,257,array('class'=>'form-control','id'=>'country_id') )}}
						{{ $errors->first('country_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ country -->
				
				<!-- city -->
				<div class="form-group {{{ $errors->has('city_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="city_id">City</label>
					<div class="col-md-10">
						{{ Form::select('city_id', $countries,257,array('class'=>'form-control','id'=>'city_id') )}}
						{{ $errors->first('city_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ city -->

				<!-- Address -->
				<div class="form-group {{{ $errors->has('address_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="address_id">Address</label>
					<div class="col-md-10">
						{{ Form::select('address_id', $cities,257,array('class'=>'form-control','id'=>'address_id') )}}
						{{ $errors->first('address_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Address -->

				<!-- Address -->
				<div class="form-group {{{ $errors->has('category_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="address_id">Category</label>
					<div class="col-md-10">
						{{ Form::select('category_id', $cats,$retailer->category_id,array('class'=>'form-control','id'=>'category_id') )}}
						{{ $errors->first('category_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Address -->
			</div>
			<!-- ./ general tab -->

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
@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$(document).ready(function() {
			  	// $("#country_id").select2();
			});
		});
	</script>
@stop