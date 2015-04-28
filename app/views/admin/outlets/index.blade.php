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

			<!-- <div class="pull-right">
				<a href="{{{ URL::to('admin/outlets/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div> -->
		</h3>
	</div>

	<table id="outlets" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">Name</th>
				<th class="col-md-1">Register</th>
				<th class="col-md-2">Website</th>
				<th class="col-md-1">Operation</th>
				<th class="col-md-1">Rate</th>
				<th class="col-md-1">Active</th>
				<th class="col-md-1">Created</th>
				<th class="col-md-1">Updated</th>
				<th class="col-md-1">Actions</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
				oTable = $('#outlets').dataTable( {
				// "sDom": "<'row'<'col-md-6'l>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/outlets/data') }}",
	     		"fnDrawCallback": function ( oSettings ) {
		        	$('.container').on('click', '.dataTable .btn-xs, .btn-info.iframe', function() {
		        		if ($(this).hasClass('btn-danger') || $(this).hasClass('btn-warning')) {
		        			$(".iframe").colorbox({iframe:true, width:"600px", height:"200px"});
		        		} else {
		        			$(".iframe").colorbox({iframe:true, width:"600px", height:"400px"});
		        		}
		        	});
	     		}
			});
		});
	</script>
@stop