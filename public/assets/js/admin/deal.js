/* 
* @Author: Dung Ho
* @Date:   2015-03-11 23:10:28
* @Last Modified by:   Dung Ho
* @Last Modified time: 2015-03-12 17:34:08
*/

'use strict';
$(document).ready(function() {
	var oTable;
	$(document).ready(function() {
			oTable = $('#deal').dataTable( {
			// "sDom": "<'row'<'col-md-6'l>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
			"sPaginationType": "bootstrap",
			"oLanguage": {
				"sLengthMenu": "_MENU_ records per page"
			},
			"bProcessing": true,
	        "bServerSide": true,
	        "sAjaxSource": "/admin/deals/data",
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
});