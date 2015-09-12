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
	<form role="form" name="search_form" class="form" id="search_form">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h1 style="color:#E5630C">Search by:</h1>
			</div>
			<div class="col-lg-6">
				<input type="text" name="keyword" class="form-control"/>
			</div>
			<div class="col-lg-2">
					<input type="button" id="click_search" class="btn btn-lg btn-complete" value="SEARCH"/>
			</div>
		</div>
		<div class="row">
			
			<div class="container">
				
			<label for="search_type" class="control-label input-group">Search by:</label>
			<div class="btn-group" data-toggle="buttons">
				<div class="col-lg-2">
					<label class="btn btn-default">
						<input type="radio" class="btn" checked="checked" name="search_type" value="name" class="form-control">Name</input>
					</label>
				</div>
				<div class="col-lg-2">
					<label class="btn btn-default">
						<input type="radio" name="search_type" value="citation_id" class="form-control">Citation/Ticket #</input>
					</label>
				</div>
				<div class="col-lg-2">
					<label class="btn btn-default">
						<input type="radio" name="search_type" value="drivers_license" class="form-control">Driver's License</input>
					</label>
				</div>
			</div>
			</div>

		</div>
	</div>
    </form>
</section>

<div id="result">
	
</div>
