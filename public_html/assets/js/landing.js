$('#click_search').click(function() {
				var base_url = 'http://www.pashle.com';
                $.ajax({
                    'url' : base_url + '/Violations/Violation_search',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : $('#search_form').serialize(),
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                        if(data){
							$('#header').hide();
							$('#search').hide();
							$('#result').html(data);
                        }
                    }
                });
				event.preventDefault();
            });

$('#ret_Search').click(function(){
				$('#result').hide();
				$('#header').show();
				$('#search').show();
					   });