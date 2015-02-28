@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

	{{-- Create address Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($address)){{ URL::to('admin/addresses/' . $address->id . '/edit') }} @else {{ URL::to('admin/addresses/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
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
					<div class="col-md-10 city-form">
						{{ Form::select('city_id', $cities,0,array('class'=>'form-control') )}}
						{{ $errors->first('city_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ city -->

				<!-- Address -->
				<div class="form-group {{{ $errors->has('address') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="address">Address</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="address" id="address" value="{{{ Input::old('address', isset($city) ? $city->address : null) }}}" />
						{{ $errors->first('address', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Address -->
				
				<!-- Postal Code -->
				<div class="form-group {{{ $errors->has('postal_code') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="address">Postal Code</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="postal_code" id="postal_code" value="{{{ Input::old('postal_code', isset($city) ? $city->postal_code : null) }}}" />
						{{ $errors->first('postal_code', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ Postal Code -->

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
{{-- Scripts --}}
@section('scripts')
<script src="{{asset('assets/js/admin/address-list.js')}}"></script>
@stop