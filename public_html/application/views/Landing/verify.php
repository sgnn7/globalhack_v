<section id="verify_text">
	<div class="container">
		<div class="row">
			<h3>
				Verify the last 4 digits of your SSN
			</h3>
		</div>
	</div>
</section>

<section id="search" style="margin-top:-105px">
	<form role="form" name="search_form" class="form" id="search_form" action="">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="row" style="margin-top:25px">
					<input type="hidden" name="keyword" value="<?=$keyword;?>">
					<input type="hidden" name="search_type" value="<?=$searchType;?>">
					<div class="input-group">
						<input type="text" name="SSN" class="form-control input-lg" placeholder="Please enter last 4 digits of SSN"/>					
						<span class="input-group-btn">
							<input type="submit" class="btn btn-lg btn-complete btn-default" value="SEARCH"/>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>
</section>

<div id="result">
</div>