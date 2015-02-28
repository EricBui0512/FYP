@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')

	{{-- Create outlet Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($outlet)){{ URL::to('admin/outlets/' . $outlet->id . '/edit') }} @else {{ URL::to('admin/countries/create') }} @endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- name -->
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="name">Name</label>
					<div class="col-md-10">
						{{ Form::text('name', '', array('class' => 'form-control'))}}
						<!-- <input class="form-control" type="text" name="outlet" id="outlet" value="{{{ Input::old('outlet', isset($outlet) ? $outlet->outlet : null) }}}" /> -->
						{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
					</div>
				</div>

				<div class="form-group {{{ $errors->has('address_id') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="country_id">Address</label>
					<div class="col-md-10">
						{{ Form::select('address_id', $addresses, (isset($outlet)? $outlet->address_id:0) )}}
						{{ $errors->first('address_id', '<span class="help-inline">:message</span>') }}
					</div>
				</div>

				<div class="form-group {{{ $errors->has('outlet') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="outlet">Name</label>
					<div class="col-md-10">
						{{ Form::text('name', '', array('class' => 'form-control'))}}
						<!-- <input class="form-control" type="text" name="outlet" id="outlet" value="{{{ Input::old('outlet', isset($outlet) ? $outlet->outlet : null) }}}" /> -->
						{{ $errors->first('outlet', '<span class="help-inline">:message</span>') }}
					</div>
				</div>

				<div class="form-group {{{ $errors->has('outlet') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="outlet">Name</label>
					<div class="col-md-10">
						{{ Form::text('name', '', array('class' => 'form-control'))}}
						<!-- <input class="form-control" type="text" name="outlet" id="outlet" value="{{{ Input::old('outlet', isset($outlet) ? $outlet->outlet : null) }}}" /> -->
						{{ $errors->first('outlet', '<span class="help-inline">:message</span>') }}
					</div>
				</div>


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
