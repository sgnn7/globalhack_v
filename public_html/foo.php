<?php
echo '<pre>';

var_dump($HTTP_GET_VARS);
echo '<hr>';
var_dump(array_keys($HTTP_GET_VARS));
echo '<hr>';
$keys = array_keys($HTTP_GET_VARS);
$where = '';
for ($i = 0; $i < count($keys); $i++) {
    $where .= ($i > 0) ? ' and ' : '';
    $where .= $keys[$i] . '='. "'".$HTTP_GET_VARS[$keys[$i]]."'";
}

echo "select * from citations ".(count($HTTP_GET_VARS)>0 ? $where : '');
echo '</pre>';
?>