<div class="container" style="padding-top:120px;padding-bottom:30px;">
	<div class="row">
		<h3>
			Court Results
		</h3>
	</div>
	<div class="row">
		<table>
			<thead>
				<tr>
					<th>Municipality</th>
					<th>Address</th>
					<th>Action Item</th>
				</tr>
			</thead>
			<tbody>
				<? foreach($Courts as $court){ ?>
				<tr>
					<td><?=$court->Municipality;?></td>
					<td><?=$court->Address;?></td>
					<td><a href="">MAP IT</a></td>
				</tr>
				<? } ?>
			</tbody>
		</table>
		<a href="<?=base_url();?>/Information/CourtFinder">Return to Search</a>
	</div>
</div>