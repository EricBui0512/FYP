@extends('admin.layouts.modal')
{{-- Content --}}
@section('content')
{{-- Create address Form --}}
<form class="form-horizontal" method="post" action="@if (isset($outlet)){{ URL::to('admin/outlets/' . $outlet->id . '/edit') }} @else {{ URL::to('admin/addresses/create') }} @endif" autocomplete="off">
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
				<!-- <div class="form-group">
					{{ Form::label('image', 'Image',array('class'=>'col-lg-2 control-label')) }}
					<div class="col-lg-10">
						{{ $imageForm }}
					</div>
				</div> -->
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
				<div class="form-group {{{ $errors->has('full_description') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="full_description">Description</label>
					<div class="col-md-10">
						<textarea data-uk-markdownarea="{mode:'tab'}" name="full_description" cols="75" rows="5">
						{{ Input::old('full_description',isset($outlet->description->full_description) ? $outlet->description->full_description:'')}}
						</textarea>
						{{ $errors->first('full_description', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ summary -->
				<!-- highlights -->
				<div class="form-group {{{ $errors->has('summary') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="summary">Summary</label>
					<div class="col-md-10">
						<textarea class="form-control" name="summary" cols="75" rows="5">
						{{ Input::old('summary',isset($outlet->description->summary) ? $outlet->description->summary:'')}}
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
				<div class="form-group">
					<label class="col-lg-2 control-label">Country</label>
					<div class="col-lg-2">
						{{ Form::select('country_id', $countries,isset($outlet->address->city->country_id)?$outlet->address->city->country_id:0,array('class'=>'form-control m-b','id'=>'country_id','name'=>'country') )}}
					</div>
					<label class="col-md-1 control-label">City</label>
					<div class="col-lg-2">
						{{ Form::select('city_id', $cities,isset($outlet->address->city_id)?$outlet->address->city_id:0,array('class'=>'form-control m-b','name'=>'city_id','id'=>'city_id') )}}
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label">Address{{--*/ $address = isset($outlet->address)?$outlet->address->address:'' /*--}}</label>
					<div class="col-lg-8">
						<input type="text" placeholder="address" name="address" class="form-control" value="{{{ Input::old('address', isset($outlet->address) ? $outlet->address->address : '') }}}">
						{{ $errors->first('address', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				
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