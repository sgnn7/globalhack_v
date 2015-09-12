<div class='container' style="padding-top:170px">
    <div class="panel panel-default">
        <h1>Citation Details (#<?php echo $Violations[0]->citation_number; ?>)</h1>
        <h3><span>Citation date:</span> <span id="citation_date"><?php echo $Violations[0]->citation_date; ?></span></h3>
    </div><br>
    <div class="panel">
        <span>Name:</span> <span id="name"><?php echo $Violations[0]->first_name.' '.$Violations[0]->last_name;  ?></span><br>
        <?php if (strlen($Violations[0]->drivers_license_number) > 0) { ?>
            <span>Driver's license #:</span> <span id="license"><?php echo $Violations[0]->drivers_license_number; ?></span><br>
        <?php } ?>
        <div class="defendant_address">
            <span id="address_line"><?php echo $Violations[0]->defendant_address; ?></span><br>
            <span id="address_line"><?php echo $Violations[0]->defendant_city.', '.$Violations[0]->defendant_state; ?></span><br>
        </div>
        <br>
        <div class="court">
            <span>Court date:</span> <span id="court_date"><?php echo $Violations[0]->court_date; ?></span><br>
            <span id="address_line"><?php echo $Violations[0]->court_address.', '.$Violations[0]->court_location; ?></span><br>
        </div>
    </div>
</div>
