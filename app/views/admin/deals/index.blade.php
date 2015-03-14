@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
	{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')

	<table id="deal" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">Title</th>
				<th class="col-md-1">Amount</th>
				<th class="col-md-1">Discount</th>
				<th class="col-md-1">Status</th>
				<th class="col-md-1">Time Slot</th>
				<th class="col-md-1">Created at</th>
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
	<script src="{{asset('assets/js/admin/deal.js')}}"></script>
@stop
