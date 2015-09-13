<script>
	$(function() {
		$('#myModal').bind('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var citationId = button.data('citation-id');
			
			var modal = $(this);
			
			//modal.find('#modal-job-contact').text(volunteeringJobContact);
		})
	 });
</script>

<section>	
	<div class='container'>
		<h3>
			<?=$PersonName;?>
		</h3>
		  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Citations <span class="badge"><? echo count($Citations);?></span></a></li>
		<li role="presentation"><a href="#violations" aria-controls="violations" role="tab" data-toggle="tab">Violations <span class="badge"><? echo count($Violations);?></a></li>
		<li role="presentation"><a href="#warrants" aria-controls="warrants" role="tab" data-toggle="tab">Warrants <span class="badge badge-danger"><? echo count($Warrants);?></a></li>
	  </ul>

		<!-- Tab panes -->
	  <div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">
			 <table class='table table-striped table-hover table-condensed'>
				<thead>
					<tr class='row-fluid small'>
						<th>
							<center>Date</center>
						</th>
						<th>
							<center>Citation Description</center>
						</th>
						<th>
							<center>Citation #</center>
						</th>
						<th>
							<center>Municipality</center>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Citations as $citation){?>
					<tr class='row-fluid rowlink' data-target='Violation_details/<?=$citation->citation_number;?>' title='Violation'>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=str_replace(' 00:00:00', '', $citation->status_date);?></nobr>
							</center>
						</td>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=$citation->violation_description;?></nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'>
								<nobr>
									<?=$citation->citation_number;?>
								</nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'><?=$citation->court_location;?></center>
						</td>
						<? }?>
				</tbody>
			</table>  
		</div>
		<div role="tabpanel" class="tab-pane" id="violations">
			<table class='table table-striped table-hover table-condensed'>
				<thead>
					<tr class='row-fluid small'>
						<th>
							<center>Date</center>
						</th>
						<th>
							<center>Violation Description</center>
						</th>
						<th>
							<center>Citation #</center>
						</th>
						<th>
							<center>Municipality</center>
						</th>
						<th>
							<center>Amount Owed</center>
						</th>
						<th>
							<center>Available Actions</center>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Violations as $violation){?>
					<tr class='row-fluid rowlink' data-target='Violation_details/<?=$violation->citation_number;?>' title='Violation'>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=str_replace(' 00:00:00', '', $violation->status_date);?></nobr>
							</center>
						</td>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=$violation->violation_description;?></nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'>
								<nobr>
									<button type="button" 
											      data-toggle="modal"
												  data-citation-id=<?= $violation->citation_number; ?>
											      data-target="#myModal"
											      class='btn btn-xs btn-info'
											      title='View details'>
										<?=$violation->violation_number;?>
									</button>
								</nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'><?=$violation->court_location;?></center>
						</td>
						<?  $fine_amount = $violation->fine_amount;
							$court_cost = $violation->court_cost;
							$fine_amount = substr($fine_amount,1);
							$court_cost = substr($court_cost,1);
							$totalAmount = $fine_amount + $court_cost; ?>
						<td class='clickable'>
							<center class='small-text'>
								<nobr>
									<?php 
										if ($totalAmount > 0) {
											echo "\$$totalAmount";
										}
									?>
								</nobr>
							</center>
						</td>
						<td>
							<? if($totalAmount > 0) {  ?><a  href="<?=base_url();?>Payment/process_payment/<?=$violation->violation_number;?>" class="btn btn-success btn-xs">PAY NOW</a> | <? } ?><a href="http://www.dmv.org/articles/handling-a-warrant-for-your-arrest/" class="btn btn-primary btn-xs">How to Resolve</a>
						</td>
						<? } ?>
				</tbody>
			</table>   
		</div>
		<div role="tabpanel" class="tab-pane" id="warrants">
			<table class='table table-striped table-hover table-condensed'>
				<thead>
					<tr class='row-fluid small'>
						<th>
							<center>Warrant Number</center>
						</th>
						<th>
							<center>Violation Description</center>
						</th>
						<th>
							<center>Violation #</center>
						</th>
						<th>
							<center>Municipality</center>
						</th>
						<th>
							<center>Amount Owed</center>
						</th>
						<th>
							<center>Available Actions</center>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Warrants as $warrant){?>
					<tr class='row-fluid rowlink' data-target='Violation_details/<?=$warrant->warrant_number;?>' title='Warrant Number'>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=$warrant->warrant_number;?></nobr>
							</center>
						</td>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=$warrant->violation_description;?></nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'>
								<nobr>
									<button type="button" 
											      data-toggle="modal"
											      data-target="#myModal"
											      class='btn btn-xs btn-info'
											      title='View details'>
									<?=$violation->violation_number;?>
									</button>
								</nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'><?=$warrant->court_location;?></center>
						</td>
						<?  $fine_amount = $violation->fine_amount;
							$court_cost = $violation->court_cost;
							$fine_amount = substr($fine_amount,1);
							$court_cost = substr($court_cost,1);
							$totalAmount = $fine_amount + $court_cost; ?>
						<td class='clickable'>
							<center class='small-text'>
								<nobr>
									<?php 
										if ($totalAmount > 0) {
											echo $totalAmount;
										}
									?>
								</nobr>
							</center>
						</td>
						<td>
							<? if($totalAmount > 0) {  ?><a  href="<?=base_url();?>Payment/process_payment/<?=$violation->violation_number;?>" class="btn btn-success btn-xs">PAY NOW</a>  | <? } ?><a href="http://www.dmv.org/articles/handling-a-warrant-for-your-arrest/" class="btn btn-primary btn-xs">How to Resolve</a>
						</td>
						<? } ?>
				</tbody>
			</table>   
		</div>
	  </div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-title">Citation Info</h4>
				</div>
				<div class="modal-body">
					  <div id="citation_header">
						<h1 id="citation-id">Loading...</h1>

						<h3>
							<span>Citation date:</span> 
							<span id="citation_date">Loading...</span>
						</h3>
					</div>

					<div id="defendant">
						<span id="name" style="font-weight: bold; font-size: large"><?php echo $Citations[0]->first_name . ' ' . $Citations[0]->last_name; ?> (Defendant)</span><br>
						<?php if (strcmp("TRUE", $Violations[0]->warrant_status) == 0) { ?>
							<span id="warrant_status"
								  style="color: #ff0000; font-weight: bold"><?php echo $Violations[0]->status; ?></span> <span
								id="warrant_info"><a href="http://www.dmv.org/articles/handling-a-warrant-for-your-arrest/">(more
									info)</a></span><br>
						<?php } ?>
						<?php if (strlen($Citations[0]->drivers_license_number) > 0) { ?>
							<span id="drivers_license_label">Driver's license #:</span> <span
								id="drivers_license"><?php echo $Citations[0]->drivers_license_number; ?></span><br>
						<?php } ?>
						<div class="defendant_address">
							<span id="address_line"><?php echo $Citations[0]->defendant_address; ?></span><br>
							<span
								id="address_city_state"><?php echo $Citations[0]->defendant_city . ', ' . $Citations[0]->defendant_state; ?></span><br>
						</div>
					</div>
					<br>

					<div class="court">
						<h3>Court Date: <?php echo $Citations[0]->court_date; ?></h3>
						<?php if (isset($Courts) && count($Courts) > 0) { ?>
							<div class="court_address">
								<span id="municipality"><?php echo $Courts[0]->Municipality; ?></span> <span id="court_map"><a
										href="https://maps.google.com/maps?q=<?php echo $Courts[0]->Y . ',' . $Courts[0]->X . '&z=17'; ?>">(map)</a></span><br>
								<span id="address_line"><?php echo $Courts[0]->Address; ?></span><br>
							<span
								id="address_city_state"><?php echo $Courts[0]->City . ', ' . $Courts[0]->State . ', ' . $Courts[0]->Zip_Code; ?></span><br>
							</div><br>
						<?php } ?>
						<span id="violation_description"><?php echo $Violations[0]->violation_description; ?></span><br>
						<?php if (isset($Violations[0]->fine_amount)) { ?>
							<span id="violation_fine_label">Fine:</span>
							<span id="violation_fine">$<?php echo $Violations[0]->fine_amount; ?></span><br>
							<span id="violation_cost_label">Court cost:</span>
							<span id="violation_cost">$<?php echo $Violations[0]->court_cost; ?></span><br>
							<span id="total_owed_label">Total owed:</span>
							<span id="total_owed_label">$<?php
							$total = floatval($Violations[0]->fine_amount) + floatval($Violations[0]->court_cost);
							echo number_format($total, 2);
							?></span><br><br>
						<?php } ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</section>