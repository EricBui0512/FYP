var oTable;
var city,country = 0 ;
$(document).ready(function() {
    function loadData(city,country) {
        $('#addresses').dataTable({
            // "sDom": "<'row'<'col-md-6'l>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "/admin/addresses/data/"+city+"/"+country,
            "fnDrawCallback": function(oSettings) {
                $('.container').on('click', '.dataTable .btn-xs, .btn-info.iframe', function() {
                    if ($(this).hasClass('btn-danger') || $(this).hasClass('btn-warning')) {
                        $(".iframe").colorbox({
                            iframe: true,
                            width: "300px",
                            height: "200px"
                        });
                    } else {
                        $(".iframe").colorbox({
                            iframe: true,
                            width: "600px",
                            height: "400px"
                        });
                    }
                });
            }
        });
    }
    loadData(0,0);
 //    $('#countries-list').on('change', function() {
	//   	country = $(this).val();
	//   	$.ajax({
 //            url: '/add',
 //            method: 'POST',
 //            async: true,
 //            success: function(data) {
                
 //            },
 //            statusCode: {
 //                404: function() {
 //                   // error
 //                }
 //            },
 //            complete: function() {
 //                //complete
 //            }
 //        });
	//   	loadData(0,country);
	// });
	$('#cities-list').on('change', function() {
	  	country = $("#countries-list").val();
	  	city = $(this).val();
	  	loadData(city,country);
	});
});
