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
							<center>Citation Number</center>
						</th>
						<th>
							<center>Citation Date</center>
						</th>
						<th>
							<center>Court Date</center>
						</th>
						<th>
							<center>Court Location</center>
						</th>
						<th>
							<center>Court Address</center>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Citations as $citation){?>
					<tr class='row-fluid rowlink' data-target='Violation_details/<?=$citation->citation_number;?>' title='Violation'>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=$citation->citation_number;?></nobr>
							</center>
						</td>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=str_replace(' 00:00:00', '', $citation->citation_date);?></nobr>
							</center>
						</td>
						<td class='rowlink-skip'>
							<center class='small-text'>
								<nobr><?=$citation->court_date;?></nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'>
								<nobr>
									<?=$citation->court_location;?>
								</nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'><?=$citation->court_address;?></center>
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
									<a href='<?=base_url();?>Violations/Violation_details/<?=$violation->citation_number;?>'
											      class='btn btn-xs btn-info'
											      title='View details'>
										<?=$violation->violation_number;?>
									</a>
								</nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'><?=$violation->court_location;?></center>
						</td>
						<?  $fine_amount = $violation->fine_amount;
							$court_cost = $violation->court_cost;
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
							<center>
								<? if($totalAmount > 0) {  ?><a  href="<?=base_url();?>Payment/process_payment/<?=$violation->violation_number;?>" class="btn btn-success btn-xs">PAY NOW</a> | <? } ?><a href="http://www.dmv.org/articles/handling-a-warrant-for-your-arrest/" class="btn btn-primary btn-xs">How to Resolve</a>
							</center>
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
									<a href='<?=base_url();?>Violations/Violation_details/<?=$violation->citation_number;?>'
											      class='btn btn-xs btn-info'
											      title='View details'>
										<?=$violation->violation_number;?>
									</a>
								</nobr>
							</center>
						</td>
						<td class='clickable'>
							<center class='small-text'><?=$warrant->court_location;?></center>
						</td>
						<?  $fine_amount = $violation->fine_amount;
							$court_cost = $violation->court_cost;
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
							<center>
								<? if($totalAmount > 0) {  ?><a  href="<?=base_url();?>Payment/process_payment/<?=$violation->violation_number;?>" class="btn btn-success btn-xs">PAY NOW</a>  | <? } ?><a href="http://www.dmv.org/articles/handling-a-warrant-for-your-arrest/" class="btn btn-primary btn-xs">How to Resolve</a>
							</center>
						</td>
						<? } ?>
				</tbody>
			</table>   
		</div>
	  </div>
	</div>
	<!--
	<script>
		$(function() {
			$('#myModal').bind('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
				var modal = $(this);

				modal.find('#modal-citation-id').text(button.data('citation-id'));
				modal.find('#modal-citation-date').text(button.data('citation-date'));
				modal.find('#modal-warrant-status').text(button.data('warrant-status'));
				modal.find('#modal-drivers-license').text(button.data('drivers-license'));
				modal.find('#modal-citation-id').text(button.data('citation-id'));
				modal.find('#modal-citation-id').text(button.data('citation-id'));
				modal.find('#modal-citation-id').text(button.data('citation-id'));
			})
		 });
	</script>
-->

</section>