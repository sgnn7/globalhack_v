<section>
	<div class="container" style="margin-top:60px">
		<form role="form">
			<div class="container">
			<div class="row">
				<div class="col-md-6" style="text-align:center;">
					<? $amount = $Violation[0]->fine_amount + $Violation[0]->court_cost; ?>
					<h2>Amount owed: $<?=$amount;?>
				</div>
				<div class="col-md-6">
					<address>
						<strong>Fenton Municipal Division, Judicial Circuit 21</strong><br>
						625 New Smizer Mill Road<br>
						Fenton, MO 63026<br>
						<abbr title="Phone">P:</abbr> (636) 343-1007
					</address>
				</div>
			</div>
			<div id="accordion">
			<h3>Credit Card</h3>
			<div>
			<p>
				<div class="panel panel-default credit-card-box">
				<div class="panel-heading" >
					<div class="row display-tr" >
						<h3 class="panel-title display-td" >Payment Details</h3>
						<div class="display-td" >                            
							<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
						</div>
					</div>                    
				</div>
				<div class="panel-body">
				<form role="form" id="payment-form">
				<div class="row">
				  <div class="col-xs-12">
					<div class="form-group">
					  <label for="cardNumber">CARD NUMBER</label>
					  <div class="input-group">
						<input 
						   type="tel"
						   class="form-control"
						   name="cardNumber"
						   placeholder="Valid Card Number"
						   autocomplete="cc-number"
						   required autofocus 
						   />
						<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
					  </div>
					</div>                            
				  </div>
				</div>
				<div class="row">
				  <div class="col-xs-7 col-md-7">
					<div class="form-group">
					  <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
					  <input 
						 type="tel" 
						 class="form-control" 
						 name="cardExpiry"
						 placeholder="MM / YY"
						 autocomplete="cc-exp"
						 required 
						 />
					</div>
				  </div>
				  <div class="col-xs-5 col-md-5 pull-right">
					<div class="form-group">
					  <label for="cardCVC">CV CODE</label>
					  <input 
						 type="tel" 
						 class="form-control"
						 name="cardCVC"
						 placeholder="CVC"
						 autocomplete="cc-csc"
						 required
						 />
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-xs-12">
					<button class="btn btn-success btn-lg btn-block" data-target="#myModal" data-toggle="modal" type="button">Pay Now</button>
				  </div>
				</div>
				<div class="row" style="display:none;">
				  <div class="col-xs-12">
					<p class="payment-errors"></p>
				  </div>
				</div>
				</form>
				</div>
				</div>   
			</p>
			</div>
				
			<h3>Volunteer</h3>
			<div>
				<p>
				Find places where you can volunteer in order to pay for your tickets <a href="/Volunteer" class="btn btn-info btn-small" style="margin-top: -4px;">here</a>.
				</p>
			</div>
				
			<h3>Check/Money Order</h3>
			<div>
				<p>
				Please send checks and money orders to the municipal court at the address provided above. Address checks to them.
				</p>
			</div>
				
			<h3>Phone</h3>
			<div>
				<p>
				To pay for your citation via phone, please call the relevant municipal court through the phone number provided above.		
				</p>
			</div>
			<!--
			<h3>PayPal</h3>
			<div>
			<p>
			Cras dictum. Pellentesque habitant morbi tristique senectus et netus
			et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
			faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
			mauris vel est.
			</p>
			<p>
			Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
			inceptos himenaeos.
			</p>
			</div>-->
			</div>
			</div>
		</form>
	</div>
	
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-title">Payment result</h4>
			</div>
			<div class="modal-body">
				<h3 id="modal-org-name" class="volunteer-detail-header">Payment was processed successfully!</h3>
				<br />
				<center>
					<a class="btn btn-lg btn-success" href="#">
						<i class="fa fa-check fa-5x"></i>
					</a>
				</center>
			</div>
			<div class="modal-footer">
				<a href="/" type="link" class="btn btn-default" role="button">Return to homepage</a>
			</div>
		</div>
	</div>
</div>
</section>