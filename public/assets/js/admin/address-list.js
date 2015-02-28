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
            "sAjaxSource": "/admin/addresses/data/city/country",
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
    loadData();
});
