
<?php
$link = mysql_connect('localhost','root','');
$dbname = 'mydbname';
$db_selected = mysql_select_db($dbname, $link);
$result = mysql_query("SELECT * FROM sometable WHERE userid = '20'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
/* Use the result, assuming we're done with it afterwards */
$row = mysql_fetch_assoc($result);

/* Now we free up the result and continue on with our script */
mysql_free_result($result);

echo $row['userid']."<br>";
echo $row['userstatus'];
?>
