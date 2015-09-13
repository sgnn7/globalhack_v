<script>
	$(function() {
		$('#myModal').bind('show.bs.modal', function (event) {
			alert("event");
			var button = $(event.relatedTarget) // Button that triggered the modal
			var volunteeringOrgName = button.data('volunteer-org-name') // Extract info from data-* attributes
			var modal = $(this)
			modal.find('.modal-title').text('New message to ' + volunteeringOrgName)
			modal.find('.modal-title').val(volunteeringOrgName)
		})
	 });
</script>

<div class='container fuelux' style="padding-top:170px">
    <div class="container fuelux">
        <div class="wizard" data-initialize="wizard" id="myWizard">
            <div class="steps-container">
                <ul class="steps">
                    <li data-step="1" data-name="eligibility" class="active">
                        <span class="badge">1</span>Eligibility
                        <span class="chevron"></span>
                    </li>
                    <li data-step="2" data-name="template">
                        <span class="badge">2</span>Opportunities
                        <span class="chevron"></span>
                    </li>
                </ul>
            </div>
            <div class="actions">
                <button type="button" class="btn btn-default btn-prev"><span
                        class="glyphicon glyphicon-arrow-left" id="abc"></span>Prev
                </button>
                <button type="button" class="btn btn-default btn-next" data-last="Complete">Next<span
                        class="glyphicon glyphicon-arrow-right"></span></button>
            </div>
            <div class="step-content">
                <div class="step-pane active sample-pane bg-info alert" data-step="1">
                    <h4 class="volunteer-page-header">You Are Eligible For Community Service!</h4>
                    <p>Press next to find community service options convenient for you.</p>
                </div>
                <div class="step-pane active sample-pane bg-info alert" data-step="2">
                    <h4 class="volunteer-page-header">Available Community Service Opportunities</h4>

                    <div class='panel panel-default'>
                        <table class='table table-striped table-hover table-condensed'>
                            <thead>
								<tr class='row-fluid small'>
									<th>
										<center>Organization</center>
									</th>
									<th>
										<center>Type</center>
									</th>
									<th>
										<center>Date of Service</center>
									</th>
									<th>
										<center>Location</center>
									</th>
									<th>
										<center>Hours Offered</center>
									</th>
								</tr>
                            </thead>
                            <tbody>
                            <?php foreach ($Volunteers as $volunteer) { ?>
                                <tr class='row-fluid rowlink' data-target=''
                                    title='Violation'>
                                    <td class='rowlink-skip'>
                                        <center class='small-text'>
                                            <nobr><button type="button" class="btn btn-xs btn-info my_popup_open" 
														              data-toggle="modal" data-target="#myModal"
																	  data-volunteer-org-name="<?= $volunteer->Name ?>"	
														              title='View details'><?= $volunteer->Name ?></button></nobr>
                                        </center>
                                    </td>
                                    <td class='rowlink-skip'>
                                        <center class='small-text'>
                                            <nobr>
												<?= $volunteer->OpportunityType ?>
                                            </nobr>
                                        </center>
                                    </td>
                                    <td class='clickable'>
                                        <center class='small-text'>
                                            <nobr><?= $volunteer->date_of_service; ?></nobr>
                                        </center>
                                    </td>
                                    <td class='clickable'>
                                        <center class='small-text'><?= $volunteer->city; ?></center>
                                    </td>
                                    <td class='clickable'>
                                        <center class='small-text'>
                                            <nobr><?= $volunteer->hours_offered; ?></nobr>
                                        </center>
                                    </td>
                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>


 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" />
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="modal-title">Volunteering Info</h4>
		</div>
		<div class="modal-body">
			<h3 class="volunteer-detail-header">Some organization</h3>
			<p class="">Organizational description placeholder text</p>
			<h3 class="volunteer-detail-header">Some job position</h3>
			<p class="">Job described in more details</p>
			<h3 class="volunteer-detail-header">County Name</h3>
			<div id="map">Map</div>
			<h3 class="volunteer-detail-header">Contact Info</h3>
			<ul>
			<li>Phone Number: 555-555-1234</li>
			</ul>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>