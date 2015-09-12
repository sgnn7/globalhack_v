<?php
header('Content-Type: application/json');
// Make a MySQL Connection
mysql_connect("www.pashle.com", "pashleco_db", "J4NecUVweejmBVQq") or die(mysql_error());
mysql_select_db("pashleco_data") or die(mysql_error());

$keys = array_keys($HTTP_GET_VARS);
$where = '';
for ($i = 0; $i < count($keys); $i++) {
    $where .= ($i > 0) ? ' and ' : '';
    $val = $HTTP_GET_VARS[$keys[$i]];
    if (strpos($val, '%')) {
        $where .= $keys[$i] . ' like '. "'".$val."'";
    } else {
        $where .= $keys[$i] . '='. "'".$val."'";
    }
}

// Retrieve all the data from the "example" table
$result = mysql_query("select * from citations ".(count($HTTP_GET_VARS)>0 ? ' where '.$where : ''))
or die(mysql_error());

// store the record of the "example" table into $row
$idx = 0;
$cols = array("id",
    "citation_number",
    "citation_date",
    "first_name",
    "last_name",
    "date_of_birth",
    "defendant_address",
    "defendant_city",
    "defendant_state",
    "drivers_license_number",
    "court_date",
    "court_location",
    "court_address");
$data = array();
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    $stuff = array();
    for ($i = 0; $i < count($row); $i++) {
        $stuff[ $cols[$i] ] = $row[$i];
    }
    $data[] = $stuff;
}
echo json_encode($data);

// Print out the contents of the entry

//echo "Name: ".$row['name'];
// echo " Age: ".$row['age'];

?>
