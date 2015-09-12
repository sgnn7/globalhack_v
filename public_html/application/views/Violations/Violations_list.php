<div class='container' style="padding-top:170px">
  <div class='panel panel-default'>
    <table class='table table-striped table-hover table-condensed'>
	<tr class='row-fluid small'>
	<th>
	<center>Date</center>
	</th>
	<th>
	<center>Violation Type</center>
	</th>
	<th>
	<center>Citation #</center>
	</th>
	<th>
	<center>Municipality</center>
	</th>
	<th>
	<center>Amount</center>
	</th>
	</tr>
	<tbody>
		<?php foreach($deposits as $deposit){?>
		<tr class='row-fluid rowlink' data-target='/link/to/violation' title='Violation'>
	<td class='rowlink-skip'>
	<center class='small-text'>
	<nobr>somedate</nobr>
	</center>
	</td>
	<td class='rowlink-skip'>
	<center class='small-text'>
	<nobr>Really awful driving</nobr>
	</center>
	</td>
	<td class='clickable'>
	<center class='small-text'>All</center>
	</td>
	<td class='clickable'>
	<center class='small-text'>All</center>
	</td>
	<td class='clickable'>
	<center class='small-text'>i386</center>
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
	</tbody>
    </table>
  </div>
</div>
