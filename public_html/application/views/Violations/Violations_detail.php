<div class='container' style="padding-top:170px">
    <div class="panel panel-default">
        <h1>Citation Details</h1>
        <h3><span>Citation date:</span> <span id="citation_date"><?php echo $Violations[0]->citation_date; ?></span></h3>
    </div><br>
    <div class='panel panel-default'>
        <pre><?php var_dump($Violations)  ?>
        <hr>
        <table class='table table-striped table-hover table-condensed'>
            <thead>
            <tr class='row-fluid small'>
                <th>
                    <center>Date</center>
                </th>
                <th>
                    <center>Violation Description</center>
                </th>
                <th>
                    <center>Citation #</center>
                </th>
                <th>
                    <center>Municipality</center>
                </th>
                <th>
                    <center>Amount Owed</center>
                </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
