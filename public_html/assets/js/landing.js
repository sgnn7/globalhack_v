$('#showSystem').click(function() {
				var base_url = 'http://www.myideatag.com/prezlimos';
				var eventdate = $('#pickup_date').val();
                $.ajax({
                    'url' : base_url + '/reservations/getReservationsforDate',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'eventdate' : eventdate},
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                        if(data){
							$('#resSystem').html(data);
                        }
                    }
                });
				event.preventDefault();
            });