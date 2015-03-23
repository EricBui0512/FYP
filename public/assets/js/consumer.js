/*search form*/
$(document).ready(function(e){
	$('select[name="country"]').change(function(e){
		var token = $('input[name="_token"]').val();
		$.post('/getCities',{country_id:$(this).val(),csrf_token:token}).done(function(data){
			$('select[name="city"]').html(data);
		});
	});
});
/*end search form*/

/*booking form*/
$(document).ready(function(e){
	$('select[name="spaName"]').change(function(e){
		var token = $('input[name="_token"]').val();
		$.get('/user/getSpaLocations',{retailer_id:$(this).val(),csrf_token:token}).done(function(data){
			$('select[name="spaLocation"]').html(data);
		});
	});

	$('select[name="spaLocation"]').change(function(e){
		var token = $('input[name="_token"]').val();
		$.get('/user/getServiceNames',{outlet_id:$(this).val(),csrf_token:token}).done(function(data){
			$('select[name="serviceName"]').html(data);
		});
	});
	$('select[name="serviceName"]').change(function(e){
		var token = $('input[name="_token"]').val();
		$.get('/user/getTimeSlot',{service_id:$(this).val(),csrf_token:token}).done(function(data){
			$('select[name="timeSlot"]').html(data);
		});
	});
});
/*booking form*/