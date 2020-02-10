<?php
$link = mysql_connect('localhost:/tmp/mysql.sock', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>