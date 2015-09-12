<div class='container' style="padding-top:170px">
    <div id="citation_header">
        <h1>Citation Details (#<?php echo $Citations[0]->citation_number; ?>)</h1>

        <h3><span>Citation date:</span> <span id="citation_date"><?php echo $Citations[0]->citation_date; ?></span>
        </h3>
    </div>

    <div id="defendant">
        <h3>Defendant</h3>
        <span
            id="name"><?php echo $Citations[0]->first_name . ' ' . $Citations[0]->last_name; ?></span><br>
        <?php if (strlen($Citations[0]->drivers_license_number) > 0) { ?>
            <span id="drivers_license_label">Driver's license #:</span> <span
                id="drivers_license"><?php echo $Citations[0]->drivers_license_number; ?></span><br>
        <?php } ?>
        <div class="defendant_address">
            <span id="address_line"><?php echo $Citations[0]->defendant_address; ?></span><br>
            <span
                id="address_city_state"><?php echo $Citations[0]->defendant_city . ', ' . $Citations[0]->defendant_state; ?></span><br>
        </div>
    </div>
    <br>

    <div class="court">
        <h3>Court</h3>
        <span id="violation_description"><?php $Violations[0]->violation_description; ?></span><br>
        <span id="court_date_label">Court date:</span> <span
            id="court_date"><?php echo $Citations[0]->court_date; ?></span><br>
        <span
            id="address_line"><?php echo $Citations[0]->court_address . ', ' . $Citations[0]->court_location; ?></span><br>
    </div>
    <pre><?php var_dump($Violations); ?></pre>
</div>
