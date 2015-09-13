<div class='container' style="padding-top:150px">
	<h3>
		<?=$PersonName;?>
	</h3>
	  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Citations <span class="badge"><? echo count($Citations);?></span></a></li>
    <li role="presentation"><a href="#violations" aria-controls="violations" role="tab" data-toggle="tab">Violations <span class="badge"><? echo count($Violations);?></a></li>
    <li role="presentation"><a href="#warrants" aria-controls="warrants" role="tab" data-toggle="tab">Warrants <span class="badge badge-danger"><?=$WarrantCount;?></a></li>
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
								<a class='btn btn-xs btn-info' href='<?=base_url();?>Violations/Violation_details/<?=$violation->citation_number;?>' title='View details'>
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
					<td><a href="<?=base_url();?>Payment/<?=$violation->violation_number;?>" class="btn btn-success btn-xs">PAY NOW</a> | <a href="<?=base_url();?>Information" class="btn btn-primary btn-xs">How to Resolve</a>
					</td>
					<? } ?>
			</tbody>
		</table>   
	</div>
    <div role="tabpanel" class="tab-pane" id="warrants">...</div>
  </div>
	
</div>
