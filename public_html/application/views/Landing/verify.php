<h3
<section id="search">
	<form role="form" name="search_form" class="form" id="search_form" action="/verify">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
<!-- 				<label for="search_type">Search by:</label> -->
				<h1 style="color:#E5630C">Search by:</h1>
			</div>
			<div class="col-lg-4">
				<div class="row" style="margin-top:25px">
					<input type="text" name="keyword" class="form-control input-lg"/>
				</div>
				<div class="row" style="margin-top:15px">
					<div class="container">
						<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" checked="checked" name="search_type" value="name"></input>
									Last Name
								</label>
								<label class="btn btn-default">
									<input type="radio" name="search_type" value="citation_id"></input>
									Citation/Ticket #
								</label>
								<label class="btn btn-default">
									<input type="radio" name="search_type" value="drivers_license"></input>
									Driver's License
								</label>
							</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2"  style="margin-top:25px">
					<input type="button" id="click_search" class="btn btn-lg btn-complete" value="SEARCH"/>
			</div>
		</div>
	</div>
    </form>
</section>

<div id="result">
	
</div>
