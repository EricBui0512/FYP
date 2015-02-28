@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

	{{-- Create city Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($city)){{ URL::to('admin/cities/' . $city->id . '/edit') }} @else {{ URL::to('admin/cities/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- city -->
				<div class="form-group {{{ $errors->has('city') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="country_id">Country</label>
					<div class="col-md-10">
						{{ Form::select('country_id', $countries, (isset($city)? $city->country_id:0) )}}
						{{ $errors->first('country_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ city -->

				<!-- city -->
				<div class="form-group {{{ $errors->has('city') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="city">city</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="city" id="city" value="{{{ Input::old('city', isset($city) ? $city->city : null) }}}" />
						{{ $errors->first('city', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ city -->

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
