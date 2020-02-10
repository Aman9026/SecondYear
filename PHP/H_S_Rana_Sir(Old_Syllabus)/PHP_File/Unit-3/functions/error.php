
<?php
$link = mysql_connect("localhost", "root", "");

mysql_select_db("nonexistent", $link);
echo mysql_errno($link) . ": " . mysql_error($link). "<br>";

mysql_select_db("kossu", $link);
mysql_query("SELECT * FROM nonexistenttable", $link);
echo mysql_errno($link) . ": " . mysql_error($link) . "<br>";
?>
