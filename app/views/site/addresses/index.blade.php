@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
	{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
	<div class="page-header">
		<h3>
			{{{ $title }}}
			<div class="pull-right">
				<a href="{{{ URL::to('admin/addresses/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>
	<div class="row padding-bottom20">
		<label for="country" class="col-md-1 control-label">Country</label>
		<div class="col-md-2">
			{{ Form::select('country_id', $countries, 0, array('class'=>'form-control','id'=>'countries-list'))}}
		</div>
		<label for="country" class="col-md-1 control-label">City</label>
		<div class="col-md-2 cities-list">
			{{ Form::select('city_id', $cities, 0, array('class'=>'form-control','id'=>'cities-list'))}}
		</div>
	</div>
	<table id="addresses" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">Address</th>
				<th class="col-md-2">District</th>
				<th class="col-md-2">Postal code</th>
				<th class="col-md-2">Created at</th>
				<th class="col-md-2">Updated at</th>
				<th class="col-md-1">Actions</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script src="{{asset('assets/js/admin/address-list.js')}}"></script>
@stop