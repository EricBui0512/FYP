@extends('site.layouts.retailer')

{{-- Content --}}
@section('content')
<div class="col-sm-12">
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">Address Form</div>
         <div class="panel-body">
            <!--  -->
            {{-- Create address Form --}}
			<form class="form-horizontal" method="post" action="@if (isset($address)){{ URL::to('address/' . $address->id . '/edit') }} @else {{ URL::to('address/create') }} @endif" autocomplete="off">
				<!-- CSRF Token -->
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				<!-- ./ csrf token -->	
					<!-- country -->
					<div class="form-group {{{ $errors->has('country_id') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="country_id">Country</label>
						<div class="col-lg-8">
							{{ Form::select('country_id', $countries,257,array('class'=>'form-control','id'=>'country_id') )}}
							{{ $errors->first('country_id', '<span class="help-inline">:message</span>') }}
						</div>
					</div>
					<!-- ./ country -->

					<!-- city -->
					<div class="form-group {{{ $errors->has('city_id') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="city_id">City</label>
						<div class="col-lg-8 city-form">
							{{ Form::select('city_id', $cities,0,array('class'=>'form-control') )}}
							{{ $errors->first('city_id', '<span class="help-inline">:message</span>') }}
						</div>
					</div>
					<!-- ./ city -->

					<div class="form-group {{{ $errors->has('district') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="district">District</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" name="district" id="district" value="{{{ Input::old('district', isset($address) ? $address->district : null) }}}" />
							{{ $errors->first('district', '<span class="help-inline">:message</span>') }}
						</div>
					</div>

					<!-- Address -->
					<div class="form-group {{{ $errors->has('address') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="address">Address</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" name="address" id="address" value="{{{ Input::old('address', isset($address) ? $address->address : null) }}}" />
							{{ $errors->first('address', '<span class="help-inline">:message</span>') }}
						</div>
					</div>
					<!-- ./ Address -->
					
					<!-- Postal Code -->
					<div class="form-group {{{ $errors->has('postal_code') ? 'error' : '' }}}">
						<label class="col-md-2 control-label" for="address">Postal Code</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" name="postal_code" id="postal_code" value="{{{ Input::old('postal_code', isset($city) ? $city->postal_code : null) }}}" />
							{{ $errors->first('postal_code', '<span class="help-inline">:message</span>') }}
						</div>
					</div>
					<!-- ./ Postal Code -->
					<!-- Form Actions -->
					<div class="form-group">
						<div class="col-md-offset-2 col-lg-8">				
							<button type="reset" class="btn btn-default">Reset</button>
							<button type="submit" class="btn bt-spa">OK</button>
						</div>
					</div>
					<!-- ./ form actions -->
			</form>
			        <!--  -->
         </div>
      </div>
      <!-- END panel-->
   </div>

@stop
