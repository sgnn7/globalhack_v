<div class="container" style="padding-top:120px; padding-bottom:30px;">
	<div class="row">
		<h3>
			Court Finder By Zip Code
		</h3>
	</div>
	<div class="container">
		<div class="row">
			<form name="court_finder" action="<?=base_url();?>Information/search_court" method="post">
			<div class="col-md-4">
				<input type="text" name="keyword" class="form-control" Placeholder="Enter Zip Code">
			</div>
			<div class="col-md-2">
				<input type="submit" value="FIND Court" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
	
</div>