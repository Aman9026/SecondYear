<?php
mysql_connect("localhost", "root", "srikanth") or
    die("Could not connect: " . mysql_error());
mysql_select_db("upes");

$result = mysql_query("SELECT * FROM mft");

while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    printf ("ID: %s  Name: %s<br>", $row[0], $row["student_name"]);
}

mysql_free_result($result);
?>