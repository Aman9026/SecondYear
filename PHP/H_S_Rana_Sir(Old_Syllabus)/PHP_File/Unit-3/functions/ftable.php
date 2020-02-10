
<?php
$link = mysql_connect('localhost','root','');
$dbname = 'mydbname';
$db_selected = mysql_select_db($dbname, $link);
$result = mysql_query("SELECT * FROM sometable WHERE userid = '20'");

//$query = "SELECT account.*, country.* FROM account, country WHERE country.name = 'Portugal' AND account.country_id = country.id";

// get the result from the DB
//$result = mysql_query($result);

// Lists the table name and then the field name
for ($i = 0; $i < mysql_num_fields($result); ++$i) {
    $table = mysql_field_table($result, $i);
    $field = mysql_field_name($result, $i);

    echo  "$table: $field <br>";
}

?>
