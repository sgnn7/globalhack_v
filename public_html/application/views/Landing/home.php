<header id="topHeader" lang="en">
<!-- Landing Header -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-text">
                        <span class="name" alt="Find your ticket information">Find your Ticket Information</span>
                        <hr class="star-light" style="color:#FFFF00">
                        <span class="skills" alt="Here you can search tickets get court information and pay fines">Search Tickets - Get Court Information - Pay Fines</span>
                    </div>
			</div>
		</div>
	</div>
</header>
<section id="search">
	<form role="form" name="search_form" class="form" id="search_form" action="Landing/verify" method="post">
	<div class="container">
		<div class="row">
			<div class="col-lg-5" style="margin-top:10p">
				<h1 style="color:#E5630C">Search for:</h1>
			</div>
			<div class="col-lg-6 col-xs-8 col-xs-offset-1">
				<div class="row" style="margin-top:25px">
					<div class="input-group">
						<label for="search-input-text" class="hidden" visibility="hidden">Search for:</label>
						<span class="input-group-btn">
							<input type="text" id="search-input-text" name="keyword" class="form-control input-lg" placeholder="Enter query here..."/>
							<input type="submit" class="btn btn-lg btn-complete btn-default" value="GO"/>
						</span>
					</div>
				</div>
				<div class="row" style="margin-top:15px; margin-left:35px">
					<div class="col-md-12">
						<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default btn-lg active">
									<input type="radio" checked="checked" name="search_type" value="name"></input>
									Last Name
								</label>
								<label class="btn btn-default btn-lg">
									<input type="radio" name="search_type" value="citation_id"></input>
									Citation/Ticket #
								</label>
								<label class="btn btn-default btn-lg">
									<input type="radio" name="search_type" value="drivers_license"></input>
									Driver's License
								</label>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>
</section>

<div id="result">
	
</div>
