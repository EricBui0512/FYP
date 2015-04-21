/*search form*/
$(document).ready(function(e){
	$('select[name="country"]').change(function(e){
		var token = $('input[name="_token"]').val();
		$.post('/getCities',{country_id:$(this).val(),csrf_token:token}).done(function(data){
			$('select[name="city"]').html(data);
		});
	});
	var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
	  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
	  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
	  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
	  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
	  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
	  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
	  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
	  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
	];

	$.get('/names', function(names){
		$('input[name=search_key]').typeahead({
		  hint: true,
		  highlight: true,
		  minLength: 1
		},
		{
		  name: 'names',
		  displayKey: 'value',
		  source: substringMatcher(names)
		});
	});

	
});
var substringMatcher = function(strs) {
  
  return function findMatches(q, cb) {
    var matches, substrRegex;
 
    // an array that will be populated with substring matches
    matches = [];
 
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
 
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        // the typeahead jQuery plugin expects suggestions to a
        // JavaScript object, refer to typeahead docs for more info
        matches.push({ value: str });
      }
    });
 
    cb(matches);
  };
};

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