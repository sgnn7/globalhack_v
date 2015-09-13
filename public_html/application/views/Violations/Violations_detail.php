<div class='container' style="padding-top:170px">
    <div id="citation_header">
        <h1>Citation #<?php echo $Citations[0]->citation_number; ?></h1>

        <h3><span>Citation date:</span> <span id="citation_date"><?php echo $Citations[0]->citation_date; ?></span>
        </h3>
    </div>

    <div id="defendant">
        <span id="name" style="font-weight: bold"><?php echo $Citations[0]->first_name . ' ' . $Citations[0]->last_name; ?></span><br>
        <?php if (strcmp("TRUE", $Violations[0]->warrant_status) == 0) { ?>
            <span id="warrant_status"
                  style="color: #ff0000; font-weight: bold"><?php echo $Violations[0]->status; ?></span> <span
                id="warrant_info"><a href="http://www.dmv.org/articles/handling-a-warrant-for-your-arrest/">(more
                    info)</a></span><br>
        <?php } ?>
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
        <h3>Court Date: <?php echo $Citations[0]->court_date; ?></h3>
        <?php if (isset($Courts) && count($Courts) > 0) { ?>
            <div class="court_address">
                <span id="municipality"><?php echo $Courts[0]->Municipality; ?></span> <span id="court_map"><a
                        href="https://maps.google.com/maps?q=<?php echo $Courts[0]->Y . ',' . $Courts[0]->X . '&z=17'; ?>">(map)</a></span><br>
                <span id="address_line"><?php echo $Courts[0]->Address; ?></span><br>
            <span
                id="address_city_state"><?php echo $Courts[0]->City . ', ' . $Courts[0]->State . ', ' . $Courts[0]->Zip_Code; ?></span><br>
            </div><br>
        <?php } ?>
        <span id="violation_description"><?php echo $Violations[0]->violation_description; ?></span><br>
        <?php if (isset($Violations[0]->fine_amount)) { ?>
            <span id="violation_fine_label">Fine:</span>
            <span id="violation_fine">$<?php echo $Violations[0]->fine_amount; ?></span><br>
            <span id="violation_cost_label">Court cost:</span>
            <span id="violation_cost">$<?php echo $Violations[0]->court_cost; ?></span><br>
            <span id="total_owed_label">Total owed:</span>
        <span id="total_owed_label">$<?php
            $total = floatval($Violations[0]->fine_amount) + floatval($Violations[0]->court_cost);
            echo number_format($total, 2);
            ?></span><br><br>
        <?php } ?>
    </div>
</div>
