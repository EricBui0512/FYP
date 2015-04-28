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
		</h3>
	</div>

	<table id="retailers" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-2">Name</th>
				<th class="col-md-2">Address</th>
				<th class="col-md-2">Company Register ID</th>
				<th class="col-md-2">Business</th>
				<th class="col-md-1">Website</th>
				<th class="col-md-2">Create at</th>
				<th class="col-md-1">Action</th>
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
				oTable = $('#retailers').dataTable( {
				// "sDom": "<'row'<'col-md-6'l>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/retailers/data') }}",
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