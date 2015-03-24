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
				<th class="col-md-4">Title</th>
				<th class="col-md-1">Amount</th>
				<th class="col-md-1">Discount</th>
				<th class="col-md-1">Featured</th>
				<th class="col-md-1">Status</th>
				<th class="col-md-1">Time Slot</th>
				<th class="col-md-3">Actions</th>
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

<div id="notifications" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
