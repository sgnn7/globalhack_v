<div class='container fuelux' style="padding-top:170px">
    <script>
        $(function () {
            $('#exampleModal').bind('show.bs.modal', function (event) {
                alert("foo!!!!");
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this);
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body').innerHTML('<p>'+recipient+'</p>')
            });
        });
    </script>
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
                    <li data-step="3" data-name="template">
                        <span class="badge">3</span>Register
                        <span class="chevron"></span>
                    </li>
                </ul>
            </div>
            <div class="actions">
                <button type="button" class="btn btn-default btn-prev"><span
                        class="glyphicon glyphicon-arrow-left"></span>Prev
                </button>
                <button type="button" class="btn btn-default btn-next" data-last="Complete">Next<span
                        class="glyphicon glyphicon-arrow-right"></span></button>
            </div>
            <div class="step-content">
                <div class="step-pane active sample-pane bg-info alert" data-step="1">
                    <h4>You Are Eligible For Community Service!</h4>

                    <p>Press next to find community service options convenient for you.</p>
                </div>
                <div class="step-pane sample-pane bg-info alert" data-step="2">
                    <h4>Available Community Service Opportunities</h4>

                    <div class='panel panel-default'>
                        <table class='table table-striped table-hover table-condensed'>
                            <thead>
                            <tr class='row-fluid small'>
                                <th>
                                    <center>Type</center>
                                </th>
                                <th>
                                    <center>Organization</center>
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
                                            <nobr><?= $volunteer->OpportunityType ?></nobr>
                                        </center>
                                    </td>
                                    <td class='rowlink-skip'>
                                        <center class='small-text'>
                                            <nobr>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal"
                                                        data-whatever="<?= $volunteer->Name ?>"><?= $volunteer->Name ?></button>
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
                <div class="step-pane sample-pane bg-danger alert" data-step="3">
                    <h4>Design Template</h4>

                    <p>Bacon ipsum dolor amet fatback chicken cow cupim ham landjaeger. Landjaeger alcatra biltong jerky
                        hamburger. Corned beef shoulder porchetta pig turducken short loin shank t-bone bresaola
                        landjaeger. Salami pork meatball pork belly ground round jerky chicken swine, filet mignon
                        alcatra pork loin boudin.</p>

                    <p>Sausage short ribs pork chop, pig hamburger biltong jerky meatball landjaeger salami. Tenderloin
                        pastrami cupim swine shank. Picanha pancetta pig, ball tip kielbasa alcatra pork belly bresaola
                        shank short loin beef capicola. Frankfurter hamburger ham hock corned beef. </p>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Opportunity Details</h4>
            </div>
            <div class="modal-body">
                <h3>Hello Mother</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
