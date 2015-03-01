var oTable;
var city, country = 0;
$(document).ready(function() {
    function loadData(country,city ) {
        $.ajax({
            url: "/address/get/" + country + "/" + city,
            method: 'GET',
            async: true,
            success: function(data) {
                console.log(data);
                $('#address_id').html('');
                for (var i = 0;i<=data.length - 1; i++) {
                    $('#address_id').append(new Option(data[i],i));
                };
                
            },
            statusCode: {
                404: function() {
                    // error
                }
            },
            complete: function() {
                //complete
            }
    });
}
    loadData(0, 0);
    $('#city_id').on('change', function() {
        var city_id=$(this).val();
        loadData(0,city_id);
    });
});
