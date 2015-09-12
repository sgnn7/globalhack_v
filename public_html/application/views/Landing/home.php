<header>
<!-- Landing Header -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-text">
                        <span class="name">Find your Ticket Information</span>
                        <hr class="star-light">
                        <span class="skills">Search Tickets - Get Court Information - Pay Court Costs</span>
                    </div>
			</div>
		</div>
	</div>

</header>
<h3>Search by:</h3>
    <form action="">
      <input type="radio" name="search_type" value="name">Name</input>
      <br />
      <input type="radio" name="search_type" value="citation_id">Citation/Ticket ID</input>
      <br />
      <input type="radio" name="search_type" value="drivers_license">Driver's License</input>
    </form>
    <form action="query.php">
      <br />
      <br />
      <input type="text" name="last_name" />
      <input type="submit" />
    </form>