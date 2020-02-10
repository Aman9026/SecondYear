
<?php
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('upes');
$result = mysql_query("SELECT * FROM mft ");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$flags = mysql_field_flags($result, 0);

echo $flags."<br>";
print_r(explode(' ', $flags));
?>


