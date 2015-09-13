<section>
	<div class='container' style="padding-top:170px">
		<div class='panel panel-default'>
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
							<nobr><?=str_replace(' 00:00:00', '', $violation->citation_date);?></nobr>
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
								<?=$violation->citation_number;?>
								</a>
							</nobr>
						</center>
					</td>
					<td class='clickable'>
						<center class='small-text'><?=$violation->court_location;?></center>
					</td>
					<?  $fine_amount = $violation->fine_amount;
						$court_cost = $violation->court_cost;
		/* 				$fine_amount = substr($fine_amount,1);
						$court_cost = substr($court_cost,1); */
						$totalAmount = $fine_amount + $court_cost; ?>
					<td class='clickable'>
						<center class='small-text'>
							<nobr>
								<?php 
									if ($totalAmount > 0) {
										echo '$'.$totalAmount;
									}
								?>
							</nobr>
						</center>
					</td>
					<? } ?>
			</tbody>
			</table>
		</div>
	</div>
</section>
