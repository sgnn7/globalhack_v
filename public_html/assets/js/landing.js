$('#click_search').click(function() {
				var base_url = 'http://www.pashle.com';
                $.ajax({
                    'url' : base_url + '/Violations/violation_list',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : $('#search_form').serialize(),
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                        if(data){
							$('#result').html(data);
                        }
                    }
                });
				event.preventDefault();
            });