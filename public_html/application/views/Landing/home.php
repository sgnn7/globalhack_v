<header id="header">
<!-- Landing Header -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-text">
                        <span class="name">Find your Ticket Information</span>
                        <hr class="star-light" style="color:#FFFF00">
                        <span class="skills">Search Tickets - Get Court Information - Pay Court Costs</span>
                    </div>
			</div>
		</div>
	</div>

</header>
<section id="search">
	<form role="form" name="search_form" id="search_form">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2>Search by:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<input type="text" name="keyword" />
			</div>
			<div class="col-lg-2">
				<input type="radio" class="btn" checked="checked" name="search_type" value="name">Name</input>
			</div>
			<div class="col-lg-2">
				<input type="radio" name="search_type" value="citation_id">Citation/Ticket #</input>
			</div>
			<div class="col-lg-2">
				<input type="radio" name="search_type" value="drivers_license">Driver's License</input>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-lg-offset-2">
				<input type="button" id="click_search" class="btn btn-lg btn-complete" value="SEARCH"/>
			</div>
		</div>
	</div>
    </form>
</section>

<div id="result">
	
</div>
