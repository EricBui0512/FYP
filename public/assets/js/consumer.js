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