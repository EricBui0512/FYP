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
				<a href="{{{ URL::to('admin/pages/create') }}}" class="btn btn-small btn-info"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>

	<table id="pages" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-1">ID</th>
				<th class="col-md-4">Slug</th>
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
	<script type="text/javascript">

		var oTable;

		$(document).ready(function() {

			oTable = $('#pages').dataTable( {
				// "sDom": "<'row'<'col-md-6'l>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/pages/data') }}",
	     		"fnDrawCallback": function ( oSettings ) {
		        	$('.container').on('click', '.dataTable .btn-xs, .btn-info.iframe', function() {
		        		if ($(this).hasClass('btn-danger') || $(this).hasClass('btn-warning')) {
		        			$(".iframe").colorbox({iframe:true, width:"300px", height:"200px"});
		        		} else {
		        			$(".iframe").colorbox({iframe:true, width:"600px", height:"400px"});
		        		}
		        	});
	     		}
			});
		});
	</script>
@stop