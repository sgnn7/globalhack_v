<div class='container fuelux' style="padding-top:170px">

    <!
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
                                <tr class='row-fluid rowlink' data-target='Violation_details/682690971'
                                    title='Violation'>
                                    <td class='rowlink-skip'>
                                        <center class='small-text'>
                                            <nobr><?= $volunteer->OpportunityType ?></nobr>
                                        </center>
                                    </td>
                                    <td class='rowlink-skip'>
                                        <center class='small-text'>
                                            <nobr>
                                                <a class='btn btn-xs btn-info my_popup_open'
                                                   href='#' name="<?= $volunteer->Name; ?>" title='View details'><?= $volunteer->Name ?></a></nobr>
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

                    <p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts
                        black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water
                        chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko
                        chicory celtuce parsley jÃ­cama salsify. </p>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
