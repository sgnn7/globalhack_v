<section>
	<div class="container">
		<div class="row">
			<h3>
				Verify the last 4 digits of your SSN
			</h3>
		</div>
	</div>
	
</section>

<section id="search">
	<form role="form" name="search_form" class="form" id="search_form">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="row" style="margin-top:25px">
					<input type="text" name="SSN" class="form-control input-lg" placeholder="Please enter last 4 digits of SSN"/>
				</div>
			</div>
			<div class="col-lg-2"  style="margin-top:25px">
					<input type="hidden" name="keyword" value="<?=$keyword;?>">
					<input type="hidden" name="search_type" value="<?=$searchType;?>">
					<input type="button" id="click_search" class="btn btn-lg btn-complete" value="SEARCH"/>
			</div>
		</div>
	</div>
    </form>
</section>

<div id="result">
	
</div>
