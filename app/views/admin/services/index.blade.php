@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
	{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')

	<table id="service" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">Name</th>
				<th class="col-md-1">Price</th>
				<th class="col-md-1">Status</th>
				<th class="col-md-1">Time Operate</th>
				<th class="col-md-2">Created at</th>
				<th class="col-md-2">Updated at</th>
				<th class="col-md-2">Actions</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script src="{{asset('assets/js/admin/service.js')}}"></script>
@stop
