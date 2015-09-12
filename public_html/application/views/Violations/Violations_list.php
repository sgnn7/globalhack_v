<div class='container' style="padding-top:170px">
  <div class='panel panel-default'>
    <table class='table table-striped table-hover table-condensed'>
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
	<tbody>
		<?php foreach($Violations as $violation){?>
		<tr class='row-fluid rowlink' data-target='/link/to/violation' title='Violation'>
	<td class='rowlink-skip'>
	<center class='small-text'>
	<nobr><?=$violation->status_date;?></nobr>
	</center>
	</td>
	<td class='rowlink-skip'>
	<center class='small-text'>
	<nobr><?=$violation->violation_description;?></nobr>
	</center>
	</td>
	<td class='clickable'>
	<center class='small-text'><?=$violation->citation_number;?></center>
	</td>
	<td class='clickable'>
	<center class='small-text'>All</center>
	</td>
	<td class='clickable'>
	<center class='small-text'><?=($violation->fine_amount + $violation->court_cost);?></center>
	</td>
	<td class='rowlink-skip'>
	<center>
	<nobr>
	<a class='btn btn-xs btn-info link-button' href='somelink' title='Get stuff'>
        <i class="fa fa-link"></i>
	</a>
	</nobr>
	</center>
	</td>
			<? } ?>
	</tbody>
    </table>
  </div>
</div>
